<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Program;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){

        $programs = Program::inRandomOrder()->limit(6)->get();
        $news = Program::orderBy('id', 'DESC')->limit(4)->get();
        $sliders = Slider::all();

        return view('Front.index',compact('programs','news', 'sliders'));
    }

    public function faqsPage(){
        $faqs = Faq::get();
        return view('Front.FAQ',compact('faqs'));
    }
}
