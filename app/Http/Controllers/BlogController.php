<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController
{
    public function index()
    {
        $blogs = Blog::all();

        return view('blog', [
            'blogs' => $blogs
        ]);
    }

    public function show(Blog $blog)
    {
        $blogs = Blog::all();

        return view('blog_template', [
            'required_blog' => $blog,
            'blogs' => $blogs
        ]);
    }

    public function store(Request $request)
    {
        Blog::create($this->validateForm($request));

        return redirect(route('blog.index'));
    }

    public function create()
    {
        return view('create_blog');
    }

    public function edit(Blog $blog)
    {
        return view('edit_blog', ['blog' => $blog]);
    }

    public function update(Blog $blog, Request $request)
    {
        $blog->update($this->validateForm($request));

        return redirect(route('blog.index'));
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect(route('blog.index'));
    }

    public function validateForm(Request $request)
    {
        return $request->validate([
            'title_uri' => 'required',
            'date' => 'required',
            'title' => 'required',
            'question' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
