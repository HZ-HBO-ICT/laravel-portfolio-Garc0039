<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController
{
    public function index()
    {
        $faqs = Faq::all();

        return view('ftemp', [
            'faqs' => $faqs
        ]);
    }

    public function store()
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/faq');
    }

    public function create()
    {
        return view('create_faq');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('edit_faq', ['faq' => $faq]);
    }

    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/faq');
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);

        $faq->delete();

        return redirect('/faq');
    }
}
