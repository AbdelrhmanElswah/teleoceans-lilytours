<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        return view('Front.contact-us');
    }

    public function store(Request $request)
    {
        // Check if the request contains the 'newsletterEmail' field (i.e., from the newsletter form)
        if ($request->has('newsletterEmail')) {
            // Store only the email address in the Message model (assuming Message model has an 'email' field)
            Message::create([
                'email' => $request->input('newsletterEmail')
            ]);
            return redirect()->back()->with('success', 'You have successfully subscribed to the newsletter!');
        } else {
            // Otherwise, store all the data (for other forms, e.g., contact forms)
            Message::create($request->all());
            return redirect()->back()->with('success', 'Your message has been sent successfully. We will call you soon!');
        }
    }

}
