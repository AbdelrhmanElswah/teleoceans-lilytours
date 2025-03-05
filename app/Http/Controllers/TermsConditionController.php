<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
 use App\Models\TermsCondition;
use Illuminate\Http\Request;
    
    class TermsConditionController extends Controller
    {
        public function index()
        {
            $terms = TermsCondition::latest()->get();
            return view('Front.terms', compact('terms'));
        }
    }

