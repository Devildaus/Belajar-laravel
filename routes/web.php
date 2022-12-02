<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "name" => "Firdaus",
        "email" => "wow@gmail.com",
        "image" => "image.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Firdaus",
            "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit rem. Expedita ipsum numquam tempora, recusandae accusantium ipsam consectetur et exercitationem corrupti officia cumque obcaecati, ad tenetur deleniti aspernatur enim."
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Atif",
            "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit rem. Expedita ipsum numquam tempora, recusandae accusantium ipsam consectetur et exercitationem corrupti officia cumque obcaecati, ad tenetur deleniti aspernatur enim."
        ],
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});



//Halaman Single post

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Firdaus",
            "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit rem. Expedita ipsum numquam tempora, recusandae accusantium ipsam consectetur et exercitationem corrupti officia cumque obcaecati, ad tenetur deleniti aspernatur enim."
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Atif",
            "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit rem. Expedita ipsum numquam tempora, recusandae accusantium ipsam consectetur et exercitationem corrupti officia cumque obcaecati, ad tenetur deleniti aspernatur enim."
        ],
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }



    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
    
});