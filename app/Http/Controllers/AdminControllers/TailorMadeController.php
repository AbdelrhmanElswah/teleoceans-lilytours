<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\TailorMade;
use Illuminate\Http\Request;

class TailorMadeController extends Controller
{
    protected $model;

    public function __construct(TailorMade $model)
    {
        return $this->model = $model;
    }


    public function index()
    {
        $tailors = $this->model->get();

        return view('admin.tailor_made.index', compact('tailors'));
    }

    public function show($id){
        $tailor=$this->model->findOrfail($id);
        return view('admin.tailor_made.show',compact('tailor'));
    }

    public function destroy($id){
        $tailor = $this->model->findOrfail($id);
        $tailor->delete();
        return redirect()->back();
    }
}
