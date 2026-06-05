<?php

namespace App\Http\Controllers;

use App\Models\Category;
use app\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
//        $posts = DB::select("select * from posts where id > ?", [5]);
//        $posts = DB::select("select * from posts where id > :id", ['id' => 5]);
//        $posts = DB::scalar("select count(*) from posts");
//        dump($posts);
//        foreach ($posts as $post) {
//            echo $post->title . '<br>';
//        }
//        $res = DB::insert("insert into posts (title, slug, content, created_at, updated_at) values(?,?,?,?,?)", ['Post 16', 'post 16','Post 16 content', now(), now()]);
//        $res = DB::update("update posts set title = concat(title, ?), updated_at = ? where id = ?", ['(edited2)', now(), 16]);
//        $res = DB::delete("delete from posts where id = ?", [16]);
//        dump($res);
//        $posts = Post::all();
//        dump($posts);
//        $posts = DB::table('posts')
//            ->where('id', '>', 1)
//            ->where('id', '<', 9)
//            ->get(['id', 'title']);

//        $posts = DB::table('posts')->pluck('title', 'id');
//        $posts = DB::table('posts')->count();
//        $posts = DB::table('posts')->max('id');
//        $posts = DB::table('posts')->min('id');
        $posts = DB::table('posts')
            ->select('posts.*', 'tags.title as tag_title')
            ->join('tags', 'posts.id', '=', 'tags.id', 'left')
//            ->join('tags', 'post_tag.tag_id', '=', 'tags.id')
            ->orderBy('posts.id')
            ->get();


        dump($posts);

        $posts = Post::with('categories')->get();

        return view('home', compact('posts'));
    }

}
