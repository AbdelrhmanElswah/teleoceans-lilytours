<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\Addon;
use App\Models\Blog;
use App\Models\Program;

class DashboardController extends Controller
{
    public function index()
    {
        $programs = Program::count();
        $blogs = Blog::count();
        $accommodations = Accommodation::count();
        $addons = Addon::count();

        return view('admin.index', compact('programs', 'blogs', 'accommodations', 'addons'));
    }
}
