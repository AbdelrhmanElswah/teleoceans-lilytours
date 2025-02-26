<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageContentRequest;
use App\Models\PackageContent;

class PackageContentController extends Controller
{
    protected $model;

    public function __construct(PackageContent $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $contents = $this->model->get();

        return view('admin.package_content.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.package_content.create');
    }

    public function store(PackageContentRequest $request)
    {
        $this->model->create($request->all());

        return redirect()->route('package.content.index');
    }

    public function edit($id)
    {
        $content = $this->model->findOrfail($id);

        return view('admin.package_content.edit', compact('content'));
    }

    public function update(PackageContentRequest $request, $id)
    {
        $content = $this->model->findOrfail($id);
        $content->update($request->all());

        return redirect()->route('package.content.index');
    }

    public function destroy($id)
    {
        $content = $this->model->findOrfail($id);
        $content->delete();

        return redirect()->route('package.content.index');
    }
}
