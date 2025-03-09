<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramRequest;
use App\Models\Accommodation;
use App\Models\Addon;
use App\Models\Booking;
use App\Models\Itinerary;
use App\Models\Media;
use App\Models\PackageContent;
use App\Models\Program;
use App\Models\SubCategory;
use App\Traits\GeneralTrait;

class ProgramsController extends Controller
{
    use GeneralTrait;
    protected $model;

    public function __construct(Program $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $programs = $this->model->get();

        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        $sub_categories = SubCategory::get();
        $addons = Addon::get();
        $itineraries = Itinerary::get();
        $highlights = PackageContent::where('type', 'highlights')->get();
        $sights = PackageContent::where('type', 'sights')->get();
        $includes = PackageContent::where('type', 'includes')->get();
        $excludes = PackageContent::where('type', 'excludes')->get();
        $accommodations = Accommodation::get();

        return view('admin.programs.create', compact('addons', 'itineraries', 'excludes', 'highlights', 'sights', 'includes', 'accommodations', 'sub_categories'));
    }

    public function store(ProgramRequest $request)
    {
        $image = $this->ImageUpload($request, 'image', 'images/programs');
        // نضيف الـ is_featured و is_latest للـ request مع التحقق من الـ Checkbox
        $requestData = $request->all();
        $requestData['is_featured'] = $request->has('is_featured') ? true : false;
        $requestData['is_latest'] = $request->has('is_latest') ? true : false; // إضافة is_latest
        
        $program = $this->model->create($image + $requestData);
        $program->Accommodation()->attach($request->accommodations);
        $program->Addon()->attach($request->addons);
        $program->Itinerary()->attach($request->itineraries);
        $program->highlights()->attach($request->highlights);
        $program->sights()->attach($request->sights);
        $program->includes()->attach($request->includes);
        $program->excludes()->attach($request->excludes);

        return redirect()->route('programs.index');
    }

    public function show($id)
    {
        $program = $this->model->findOrfail($id);
        $media = Media::where('program_id', $id)->get();

        return view('admin.programs.program_details', compact('program', 'media'));
    }

    public function edit($id)
    {
        $program = $this->model->findOrfail($id);
        $sub_categories = SubCategory::get();
        $addons = Addon::get();
        $itineraries = Itinerary::get();
        $highlights = PackageContent::where('type', 'highlights')->get();
        $sights = PackageContent::where('type', 'sights')->get();
        $includes = PackageContent::where('type', 'includes')->get();
        $excludes = PackageContent::where('type', 'excludes')->get();
        $accommodations = Accommodation::get();

        return view('admin.programs.edit', compact('program', 'addons', 'itineraries', 'excludes', 'highlights', 'sights', 'includes', 'accommodations', 'sub_categories'));
    }

    public function update(ProgramRequest $request, $id)
    {
        $requestArray = $request->all();
        if ($request->hasFile('image')) {
            $image = $this->ImageUpload($request, 'image', 'images/programs');
            $requestArray = $image + $request->all();
        }
        // نضيف الـ is_featured و is_latest للـ requestArray مع التحقق من الـ Checkbox
        $requestArray['is_featured'] = $request->has('is_featured') ? true : false;
        $requestArray['is_latest'] = $request->has('is_latest') ? true : false; // إضافة is_latest

        $program = $this->model->findOrfail($id);
        $program->update($requestArray);
        $program->Accommodation()->sync($request->accommodations);
        $program->Addon()->sync($request->addons);
        $program->Itinerary()->sync($request->itineraries);
        $program->highlights()->sync($request->highlights);
        $program->sights()->sync($request->sights);
        $program->includes()->sync($request->includes);
        $program->excludes()->sync($request->excludes);

        return redirect()->route('programs.index');
    }

    public function destroy($id)
    {
        $program = $this->model->with('media')->findOrFail($id);

        // Delete all associated media
        foreach ($program->media as $media) {
            // Delete the media image file
            if (file_exists(public_path('images/programs/media/' . $media->image))) {
                unlink(public_path('images/programs/media/' . $media->image));
            }
            // Delete the media record
            $media->delete();
        }

        // Delete the program
        $program->delete();

        return redirect()->route('programs.index')->with('success', 'Program and associated media deleted successfully.');
    }

    public function booking($id)
    {
        $bookings = Booking::where('program_id', $id)->get();

        return view('admin.programs.program_booking', compact('bookings'));
    }

    public function bookingDelete($id)
    {
        $bookings = Booking::findOrfail($id);
        $bookings->delete();

        return redirect()->back();
    }
}