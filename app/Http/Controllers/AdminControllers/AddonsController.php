<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddonsRequest;
use App\Models\Addon;
use App\Traits\GeneralTrait;

class AddonsController extends Controller
{
    use GeneralTrait;

    protected $model;

    public function __construct(Addon $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $addons = $this->model->get();

        return view('admin.addons.index', compact('addons'));
    }

    public function create()
    {
        return view('admin.addons.create');
    }

    public function store(AddonsRequest $request)
    {
        $image = $this->ImageUpload($request, 'image', 'images/addons');
        $this->model->create($image + $request->all());

        return redirect()->route('addons.index');
    }

    public function edit($id)
    {
        $addon = $this->model->findOrfail($id);

        return view('admin.addons.edit', compact('addon'));
    }

    public function update(AddonsRequest $request, $id)
    {
        $requestArray = $request->all();
        if ($request->hasFile('image')) {
            $image = $this->ImageUpload($request, 'image', 'images/addons');
            $requestArray = $image + $request->all();
        }
        $addon = $this->model->findOrfail($id);
        $addon->update($requestArray);

        return redirect()->route('addons.index');
    }

    public function destroy($id)
    {
        $addon = $this->model->findOrfail($id);
        $addon->delete();

        return redirect()->route('addons.index');
    }
}
