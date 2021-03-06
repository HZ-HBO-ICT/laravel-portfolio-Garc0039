<?php
namespace App\Http\Controllers;
use App\Models\Post;

class PostController extends Controller {
    public function index($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', [
            'post' => $post
        ]);
    }
}
