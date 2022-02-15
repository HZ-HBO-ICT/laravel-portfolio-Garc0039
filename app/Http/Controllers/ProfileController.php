<?php

namespace App\Http\Controllers;
use App\Models\Blog;

class ProfileController {
    public function show() {
        $blogs = Blog::all();

        return view('profile', [
            'blogs' => $blogs
        ]);
    }
}
