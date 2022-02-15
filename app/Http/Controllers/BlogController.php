<?php

namespace App\Http\Controllers;
use App\Models\Blog;

class BlogController {
    public function show() {
        $blogs = Blog::all();

        return view('blog', [
            'blogs' => $blogs
        ]);
    }

    public function showBlogs($titleUri) {
        $titleUri = Blog::where('title_uri', $titleUri)->firstOrFail();

        return view('btemp', [
            'titleUri' => $titleUri
        ]);
    }
}
