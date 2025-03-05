<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ini kita ambil models nya
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
         return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    //ini fitur dari laravel tanpa menggunakan find , kita dapat params post nya
    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "post" => $post
        ]);
    }
}
