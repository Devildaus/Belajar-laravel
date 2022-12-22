<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Clockwork\Storage\Search;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }


        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(Request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }


    public function show(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
