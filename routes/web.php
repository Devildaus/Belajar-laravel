<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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


Route::get('/blog', [PostController::class, 'index']);



//Halaman Single post

Route::get('/posts/{post:slug}', [PostController::class, 'show']);


//category binding
Route::get('/categories', function(){
    return view('categories',[
        'title'=>'Post Categories',
        'categories'=>Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    return view('category',[
        'title'=>$category->name,
        'post'=>$category->posts,
        'category'=>$category->name
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => 'All Posts by '.$author->name.' :',
        'posts' => $author->posts,
    ]);
});

