<?php

namespace App\Http\Controllers;
use App\Models\Blog;

class BlogController {
    public function index()
    {
        $blogs = Blog::all();

        return view('blog', [
            'blogs' => $blogs
        ]);
    }

    public function show($titleUri)
    {
        $blogs = Blog::all();
        $titleUri = Blog::where('title_uri', $titleUri)->first();

        return view('btemp', [
            'titleUri' => $titleUri,
            'blogs' => $blogs
        ]);
    }

    public function store()
    {
        $blog = new Blog();

        $blog->title_uri = request('title_uri');
        $blog->date = request('date');
        $blog->title = request('title');
        $blog->sub_title = request('sub_title');
        $blog->question = request('question');
        $blog->excerpt = request('excerpt');
        $blog->body = request('body');

        $blog->save();

        return redirect('/blog');
    }

    public function create()
    {
        return view('create_blog');
    }

    public function edit($titleUri)
    {
        $blog = Blog::where('title_uri', $titleUri)->first();

        return view('edit_blog', ['blog' => $blog]);
    }

    public function update($titleUri)
    {
        $blog = Blog::where('title_uri', $titleUri)->first();

        $blog->title_uri = request('title_uri');
        $blog->date = request('date');
        $blog->title = request('title');
        $blog->sub_title = request('sub_title');
        $blog->question = request('question');
        $blog->excerpt = request('excerpt');
        $blog->body = request('body');

        $blog->save();

        return redirect('/blog');
    }

    public function destroy($titleUri)
    {
        $blog = Blog::where('title_uri', $titleUri)->first();

        $blog->delete();

        return redirect('/blog');
    }
}
