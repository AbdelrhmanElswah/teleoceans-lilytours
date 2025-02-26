<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Program;
use App\Models\SubCategory;

class CategoryController extends Controller
{
    protected $model;

    public function __construct(Category $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $categories = $this->model->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = $this->model->create([
            'name' => $request->name,
            'description' => $request->description,
            'created_by' => 1,
        ]);

        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = $this->model->findOrfail($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = $this->model->findOrfail($id);
        $category->update($request->all());

        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $deleteCategory = $this->model->findOrfail($id);
        $deleteCategory->delete();

        if ($deleteCategory) {
            $deleteSubCategory = SubCategory::where('category_id', $id);
            $deleteSubCategory->delete();
            if ($deleteSubCategory) {
                $deleteProduct = Program::where('sub_category_id', $id);
                $deleteProduct->delete();
            }
        } else {
            return redirect()->route('category.index');
        }

        return redirect()->route('category.index');
    }
}
