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
        $this->model = $model; // تعديل بسيط للـ constructor
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
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'program_id' => 'required|exists:programs,id',
            'title' => 'required|string|max:255',
        ], [
            'program_id.required' => 'The program title is required.',
            'program_id.exists' => 'The selected program title does not exist.',
            'images.required' => 'At least one image is required.',
        ], [
            'program_id' => 'program title',
        ]);

        // Process the image uploads
        $uploadedImages = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = \Illuminate\Support\Str::random(40) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/programs/media'), $filename);
                $uploadedImages[] = $filename;
            }
        }

        // Create media records for each uploaded image
        foreach ($uploadedImages as $image) {
            $this->model->create([
                'title' => $request->title,
                'image' => $image,
                'program_id' => $request->program_id,
            ]);
        }

        return redirect()->route('media.program')->with('success', 'Media added successfully.');
    }

    public function destroy($id)
    {
        $media = $this->model->findOrFail($id);
        $filePath = public_path('images/programs/media/' . $media->image);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $media->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}