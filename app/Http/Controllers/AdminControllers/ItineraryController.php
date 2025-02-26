<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItineraryRequest;
use App\Models\Itinerary;

class ItineraryController extends Controller
{
    protected $model;

    public function __construct(Itinerary $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $itineraries = $this->model->get();

        return view('admin.itineraries.index', compact('itineraries'));
    }

    public function create()
    {
        return view('admin.itineraries.create');
    }

    public function store(ItineraryRequest $request)
    {
        $this->model->create($request->all());

        return redirect()->route('itineraries.index');
    }

    public function edit($id)
    {
        $itinerary = $this->model->findOrfail($id);

        return view('admin.itineraries.edit', compact('itinerary'));
    }

    public function update(ItineraryRequest $request, $id)
    {
        $itinerary = $this->model->findOrfail($id);
        $itinerary->update($request->all());

        return redirect()->route('itineraries.index');
    }

    public function destroy($id)
    {
        $itinerary = $this->model->findOrfail($id);
        $itinerary->delete();

        return redirect()->route('itineraries.index');
    }
}
