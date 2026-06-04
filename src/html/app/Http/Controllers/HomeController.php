<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{

    public function index()
    {
//        for($i = 1; $i <= 16; $i++){
//            Post::create([
//                'title' => "Post $i",
//                'slug' => "post-$i",
//                'content' => "Post $i content",
//            ]);
//        }

        return view('home');
    }

}
