<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostConstroller extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->paginate(3);
        return view('index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('show', ['post' => $post]);
    }

    public function category($category)
    {
        $category = Category::where('name', $category)->first();
        $posts = Post::where('category_id', $category->id)->paginate(3);
        return view('category', ['posts' => $posts, 'name' => $category->name]);
    }
}
