<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    //ini private untuk mengkases hanya di class ini saja
    private static $blog_posts =  [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Evan Fernando",
        "body" => "Content"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Evan Fernando 2",
        "body" => "Content 2"
    ]
    ];

    //ini kita membuat static function
    public static function all()
    {
        //ambil semua data blog_posts
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        //ini mudah karena kita sudah membuat didalam all ada collection
        $posts = static::all();
        // //ini kita membuat data tampungan
        // $post = [];

        // //ini kita membuat kita looping posts menjadi p lalu ketika slug nya sama mala post nya adalah $p
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //       $post = $p;
        //     }
        // }

        //ini kita membuat yang dimana slug adalah slug
        return $posts -> firstWhere('slug', $slug);
    
    }
}
