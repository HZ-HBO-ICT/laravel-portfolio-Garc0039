<?php

namespace App\Http\Controllers;
use App\Models\Blog;

class BlogController {
    public function show() {
        return view('blog');
    }

    public function showBlogs($titleUri) {
        $titleUri = Blog::where('title-uri', $titleUri)->firstOrFail();

        return view('btemp', [
            'titleUri' => $titleUri
        ]);
    }
}
