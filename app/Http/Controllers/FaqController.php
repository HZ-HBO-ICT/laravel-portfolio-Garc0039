<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController
{
    public function index()
    {
        $faqs = Faq::all();

        return view('faq_template', [
            'faqs' => $faqs
        ]);
    }

    public function show()
    {
        return redirect(route('faq.index'));
    }

    public function store()
    {
        Faq::create($this->validateForm());

        return redirect(route('faq.index'));
    }

    public function create()
    {
        return view('create_faq');
    }

    public function edit(Faq $id)
    {
//        $faq = Faq::find($id);

        return view('edit_faq', ['faq' => $id]);
    }

    public function update(Faq $id)
    {
        $id->update($this->validateForm());

        return redirect(route('faq.index'));
    }

    public function destroy(Faq $id)
    {
        $id->delete();

        return redirect(route('faq.index'));
    }

    public function validateForm()
    {
        return request()->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
