<?php

namespace App\Http\Controllers;

use App\Http\Requests\TailorMadeRequest;
use App\Models\PromoReferral;
use App\Models\TailorMade;
use Illuminate\Http\Request;

class TailorMadeController extends Controller
{
    public function index(){

        return view('Front.tailor-made');
    }

    public function store(TailorMadeRequest $request){
      TailorMade::create($request->all());
        return redirect()->back()->with('success', 'Your message send successfully , We will call you soon');

    }
}
