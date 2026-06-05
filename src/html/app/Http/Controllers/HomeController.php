<?php

namespace App\Http\Controllers;

use App\Models\Category;
use app\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

        $posts = Post::with('category')->get();

        return view('home', compact('posts'));
    }

}
