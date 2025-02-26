<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    protected $model;

    public function __construct(SubCategory $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $subcategories = $this->model->get();

        return view('admin.sub_category.index', compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::get();

        return view('admin.sub_category.create', compact('categories'));
    }

    public function store(SubCategoryRequest $request)
    {
        $subCategory = $this->model->create($request->all() + [
            'created_by' => 1,
        ]);

        return redirect()->route('subcategory.index');
    }

    public function edit($id)
    {
        $subcategory = $this->model->findOrfail($id);
        $categories = Category::get();

        return view('admin.sub_category.edit', compact('categories', 'subcategory'));
    }

    public function update(SubCategoryRequest $request, $id)
    {
        $category = $this->model->findOrfail($id);
        $category->update($request->all());

        return redirect()->route('subcategory.index');
    }

    public function destroy($id)
    {
        $deleteSubCategory = $this->model->findOrfail($id);
        $deleteSubCategory->delete();
        if ($deleteSubCategory) {
            $deleteProduct = Product::where('sub_category_id', $id);
            $deleteProduct->delete();
        } else {
            return redirect()->route('subcategory.index');
        }

        return redirect()->route('subcategory.index');
    }
}
