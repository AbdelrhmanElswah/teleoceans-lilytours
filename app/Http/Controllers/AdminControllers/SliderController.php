<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\GeneralTrait;

class SliderController extends Controller
{
    use GeneralTrait;

    protected $model;

    public function __construct(Slider $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $sliders = $this->model->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        // Custom Validation
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'button_text' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sliders.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Image Upload Logic (handle when no image is uploaded)
        $image = null;
        if ($request->hasFile('image')) {
            $image = $this->ImageUpload($request, 'image', 'images/sliders');
        }

        // Store the Slider (only include image if it's uploaded)
        $data = $request->all();
        if ($image) {
            $data['image'] = $image['image']; // Only add image if it's uploaded
        }

        // Create the slider in the database
        $this->model->create($data);

        return redirect()->route('sliders.index');
    }


    public function edit($id)
    {
        $slider = $this->model->findOrFail($id);
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        // Custom Validation
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'button_text' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sliders.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $slider = $this->model->findOrFail($id);

        // Update Image if exists
        $requestArray = $request->all();
        if ($request->hasFile('image')) {
            $image = $this->ImageUpload($request, 'image', 'images/sliders');
            $requestArray = $image + $request->all();
        }

        // Update the Slider
        $slider->update($requestArray);

        return redirect()->route('sliders.index');
    }

    public function destroy($id)
    {
        $slider = $this->model->findOrFail($id);
        $slider->delete();

        return redirect()->route('sliders.index');
    }
}
