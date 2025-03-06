<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the subscribers.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $subscribers = Subscriber::all(); // Fetch all subscribers
        return view('admin.subscribers.index', compact('subscribers'));
    }

    /**
     * Store a newly created subscriber in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the input data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // If validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Save the data to the database
        Subscriber::create([
            'email' => $request->email,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Email subscribed successfully!');
    }
}