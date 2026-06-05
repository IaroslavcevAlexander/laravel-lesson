<?php

namespace App\Http\Controllers;

use App\Models\Category;
use app\Models\Post;

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

//        $category = Category::find(4);
//        dump($category);
//
//
//        foreach ($category->posts as $post) {
//            dump($post->title);
//        }

//        $post = Post::find(2);
//        foreach ($post->categories as $category) {
//            dump($category->title);
//        }

//        $post = Post::with('categories')->find(1);
//        dump($post);

        $post = Post::find(3);

//        $post->categories()->attach([2, 4]);
        $post-> categories()->detach(2);

        $posts = Post::with('categories')->get();

        dump($posts);
        return view('home', compact('posts'));
    }

}
