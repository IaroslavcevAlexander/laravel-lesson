<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function index()
    {

        User::create([
            'name' => 'юрии',
            'last_name' => 'цезарь',
            'email' => 'Caesar@Mail.com',
            'password' => '123',
        ]);

        $users = User::all();

        foreach ($users as $user) {
            echo "{$user->full_name} ! <br>";
            echo"{$user->name} {$user->last_name} {$user->email} <br>";
        }

        $posts = Post::with('category')->paginate(3)->withQueryString();

        return view('home', compact('posts'));
    }

}
