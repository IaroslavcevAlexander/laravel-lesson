<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //create
//        $post = new Post();
//        $post->title = 'Post 5';
//        $post->slug = 'post-5';
//        $post->content = 'Post 5 content';
//        $post->save();

//        $post = Post::query()->create([
//            'title' => 'Post 6',
//            'slug' => 'post-6',
//            'content' => 'Post 6 contend',
//        ]);

//        for($i = 5; $i < 16; $i++){
//            $post = Post::query()->create([
//                'title' => "Post $i",
//                'slug' => "post-$i",
//                'content' => "Post $i contend",
//            ]);
//        }

        // update
//        $post = Post::find(4);
//        $post->title = 'Post 4 (edited)';
//        $post->content = 'Post 4 contend (edited)';
//        $post->save();
//        dump($post);

//        Post::query()->where('id','>',4)->update([
//            'content' => 'updated...'
//        ]);

        // delete
//        $post = Post::find(5);
//        dump($post);
//        $post->delete();

//        Post::destroy(6);
//        Post::destroy([23, 24]);

//        dump(Post::withTrashed()->find(23)->restore());
//        dump(Post::onlyTrashed()->get());
//
        $posts = Post::all();

        Post::forceDestroy([27,28]);

        return view('posts.index', [
            'title' => 'список статей',
            'posts' => $posts
        ]);
    }
}
