<?php

namespace App\Http\Controllers;

use App\Models\Post;


class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::with('category')->paginate(3)->withQueryString();

        return view('home', compact('posts'));
    }

}
