<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccommodationRequest;
use App\Models\Accommodation;
use App\Traits\GeneralTrait;

class AccommodationController extends Controller
{
    use GeneralTrait;

    protected $model;

    public function __construct(Accommodation $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $accommodations = $this->model->get();

        return view('admin.accommodations.index', compact('accommodations'));
    }

    public function create()
    {
        return view('admin.accommodations.create');
    }

    public function store(AccommodationRequest $request)
    {
        $image = $this->ImageUpload($request, 'image', 'images/Accommodation');
        $this->model->create($image + $request->all());

        return redirect()->route('accommodations.index');
    }

    public function edit($id)
    {
        $accommodation = $this->model->findOrfail($id);

        return view('admin.accommodations.edit', compact('accommodation'));
    }

    public function update(AccommodationRequest $request, $id)
    {
        $requestArray = $request->all();
        if ($request->hasFile('image')) {
            $image = $this->ImageUpload($request, 'image', 'images/Accommodation');
            $requestArray = $image + $request->all();
        }
        $accommodation = $this->model->findOrfail($id);
        $accommodation->update($requestArray);

        return redirect()->route('accommodations.index');
    }

    public function destroy($id)
    {
        $accommodation = $this->model->findOrfail($id);
        $accommodation->delete();

        return redirect()->route('accommodations.index');
    }
}
