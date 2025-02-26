<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\faqsRequest;
use App\Models\Faq;

class FAQsController extends Controller
{
    protected $model;

    public function __construct(Faq $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $faqs = $this->model->get();

        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(faqsRequest $request)
    {
        $this->model->create($request->all());

        return redirect()->route('faqs.index');
    }

    public function edit($id)
    {
        $faq = $this->model->findOrfail($id);

        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(faqsRequest $request, $id)
    {
        $faq = $this->model->findOrfail($id);
        $faq->update($request->all());

        return redirect()->route('faqs.index');
    }

    public function destroy($id)
    {
        $faq = $this->model->findOrfail($id);
        $faq->delete();

        return redirect()->route('faqs.index');
    }
}
