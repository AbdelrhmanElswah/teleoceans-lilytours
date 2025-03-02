<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Program;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $programs = Program::inRandomOrder()->limit(6)->get();
        $news = Program::orderBy('id', 'DESC')->limit(4)->get();
        $sliders = Slider::all();
        $blogs = Blog::orderBy('created_at', 'DESC')->get();  // جلب جميع البلوجات

        return view('Front.index', compact('programs', 'news', 'sliders', 'blogs'));
    }

    public function blog(){
        $blogs =Blog::all();
        return view('Front.blog', compact('blogs'));
    }
}
