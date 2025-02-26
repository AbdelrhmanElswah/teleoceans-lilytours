<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Program;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    use GeneralTrait;

    protected $model;

    public function __construct(Media $model)
    {
        return $this->model = $model;
    }

    public function indexProgram()
    {
        $media = $this->model->get();
        $programs = Program::get();

        return view('admin.media.program', compact('media', 'programs'));
    }

    public function storeProgramMedia(Request $request)
    {
        // Validation rules
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
            'program_id' => 'required|exists:programs,id', // Validate program_id with custom attribute
            'title' => 'required|string|max:255', // Validate title
        ], [
            // Custom error messages
            'program_id.required' => 'The program title is required.',
            'program_id.exists' => 'The selected program title does not exist.',
        ], [
            // Custom attribute names
            'program_id' => 'program title',
        ]);

        // Process the image upload
        $image = $this->ImageUpload($request, 'image', 'images/programs/media');

        // Create the media record
        $this->model->create($image + $request->all());

        return redirect()->route('media.program')->with('success', 'Media added successfully.');
    }

    public function destroy($id)
    {
        $media = $this->model->findOrfail($id);
        unlink(public_path('images/programs/media/'.$media->image));
        $media->delete();

        return redirect()->back();
    }
}
