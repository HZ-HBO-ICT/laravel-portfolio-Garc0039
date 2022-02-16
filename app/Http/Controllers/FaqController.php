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

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
