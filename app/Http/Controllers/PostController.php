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

    public function show($slug)
    {
        return view('post', [
            "title" => "single post",
            "post" => Post::find($slug)
        ]);
    }
}
