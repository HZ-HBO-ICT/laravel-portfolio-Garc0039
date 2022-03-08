<?php

namespace App\Http\Controllers;
use App\Models\Blog;

class ProfileController {
    public function index() {
        $blogs = Blog::all();

        return view('profile', [
            'blogs' => $blogs
        ]);
    }
}
