<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::all();
//        $posts = Post::query()
//            ->select(['id', 'title'])
//            ->where('id', '!=', 3)
////            ->where('id', '!=', 4)
//            ->orderBy('created_at', 'desc')
//            ->take(2)
//            ->get();
//        dump($posts);

//        $post = Post::query()
//            ->where('id', '=', 3)
//            ->limit(1)
//            ->get();

//        $post = Post::query()
//            ->where('id', '=', 3)
//            ->first();
//
//        $post = Post::query()->find(5, ['id', 'title']);
//        if(!$post) {
//            abort(404);
//        }

//        $post = Post::query()->findOrFail(4);
//        dump($post);


//        $post = Post::query()->firstWhere('id', '=', 2);
//        dump($post);

//        dump(Post::query()->count());

        $posts = Post::all();

        return view('posts.index', [
            'title' => 'список статей',
            'posts' => $posts
        ]);
    }
}
