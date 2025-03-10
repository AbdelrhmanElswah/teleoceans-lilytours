<?php

namespace App\Http\Controllers;
Use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index(){
        $blogs =Blog::all();
        return view('Front.blog', compact('blogs'));
    }
    public function show($id)
    {
        $blog = Blog::findOrFail($id); 
        return view('Front.blog-details', compact('blog')); 
    }

    
}
