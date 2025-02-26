<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactContoller extends Controller
{
    protected $model;

    public function __construct(Contact $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $contact = $this->model->first();

        return view('admin.contact.index', compact('contact'));
    }

    public function edit()
    {
        $contact = $this->model->findOrfail(1);

        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = $this->model->findOrfail($id);
        $contact->update($request->all());

        return redirect()->route('contacts.index');
    }
}
