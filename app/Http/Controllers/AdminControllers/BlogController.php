<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Traits\GeneralTrait;

class BlogController extends Controller
{
    use GeneralTrait;

    protected $model;

    public function __construct(Blog $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $blogs = $this->model->get();

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(BlogRequest $request)
    {
        $image = $this->ImageUpload($request, 'image', 'images/blogs');
        $this->model->create($image + $request->all());

        return redirect()->route('blogs.index');
    }

    public function edit($id)
    {
        $blog = $this->model->findOrfail($id);

        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(BlogRequest $request, $id)
    {
        $requestArray = $request->all();
        if ($request->hasFile('image')) {
            $image = $this->ImageUpload($request, 'image', 'images/blogs');
            $requestArray = $image + $request->all();
        }
        $addon = $this->model->findOrfail($id);
        $addon->update($requestArray);

        return redirect()->route('blogs.index');
    }

    public function destroy($id)
    {
        $blog = $this->model->findOrfail($id);
        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
