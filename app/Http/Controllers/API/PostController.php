<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['tags', 'category', 'user'])->paginate();
        return $posts;
    }

    public function show()
    {
        $post = Post::with(['tags', 'category', 'user'])->where(['slug',$slug])->first();
        return $post;
    }
}
