<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Message;

class MessagesController extends Controller
{
    protected $model;

    public function __construct(Message $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $messages = $this->model->get();

        return view('admin.messages.index', compact('messages'));
    }

    public function destroy($id)
    {
        $message = $this->model->findOrfail($id);
        $message->delete();

        return redirect()->back();
    }
}
