<?php

//ini connect ke models post

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "nama" => "Evan Fernando",
        "email" => "evanfrnando@gmail.com",
        "umur" => "12"
    ]);
});

Route::get('/about', function () {
    return view('about',  [
        "title" => "About",
    ]);
});


Route::get('/posts', [PostController::class, 'index' ]);
//ini post::slug untuk query slug nya
Route::get('/posts/{post:slug}', [PostController::class, 'show' ]);


// //ini manual contoh
// Route::get('/blog', function () {
//     // ini membuat data dumy
//     // $blog_posts = [
//     // [
//     //     "title" => "Judul Post Pertama",
//     //     "slug" => "judul-post-pertama",
//     //     "author" => "Evan Fernando",
//     //     "body" => "Content"
//     // ],
//     // [
//     //     "title" => "Judul Post Kedua",
//     //     "slug" => "judul-post-kedua",
//     //     "author" => "Evan Fernando 2",
//     //     "body" => "Content 2"
//     // ]
//     // ];
//     // return view('posts', [
//     //     "title" => "Posts",
//     //     "posts" => Post::all()
//     // ]);
// });


// ini contoh manual
// //halaman single posts disebut whildcard untuk dapetin slug
// Route::get('posts/{slug}', function($slug) {
//     // // ini membuat data dumy
//     // $blog_posts = [
//     // [
//     //     "title" => "Judul Post Pertama",
//     //     "slug" => "judul-post-pertama",
//     //     "author" => "Evan Fernando",
//     //     "body" => "Content"
//     // ],
//     // [
//     //     "title" => "Judul Post Kedua",
//     //     "slug" => "judul-post-kedua",
//     //     "author" => "Evan Fernando 2",
//     //     "body" => "Content 2"
//     // ]];

//     //ini membuat looping
//     // $new_post = [];

//     // foreach($blog_posts as $post) {
//     //     if($post["slug"] === $slug) {
//     //         $new_post = $post;
//     //     }
//     // }
    
//     // return view('post', [
//     //     "title" => "single post",
//     //     "post" => Post::find($slug)
//     // ]);
// });
