<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\TermsCondition;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    public function index()
    {
        $terms = TermsCondition::latest()->get();
        return view('admin.terms.index', compact('terms'));
    }
    
    public function create()
    {
        return view('admin.terms.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);
    
        TermsCondition::create($request->only('content'));
    
        return redirect()->route('terms.index')->with('success', 'Term added successfully!');
    }
    
    public function edit($id)
    {
        $term = TermsCondition::findOrFail($id);
        return view('admin.terms.edit', compact('term'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);
    
        $term = TermsCondition::findOrFail($id);
        $term->update($request->only('content'));
    
        return redirect()->route('terms.index')->with('success', 'Term updated successfully!');
    }
    
    public function destroy($id)
    {
        try {
            $term = TermsCondition::findOrFail($id);
            $term->delete();
    
            return redirect()->route('terms.index')
                ->with('success', 'Term deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Unable to delete term');
        }
    }
    //
}
