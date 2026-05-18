<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'John',
            ],

            [
                'id' => 2,
                'name' => 'Jack',
            ],

            [
                'id' => 3,
                'name' => 'Katy',
            ],

        ];

        return view('user.create', [
            'name' => 'John Doe',
            'age' => 32,
            'users' => $users,
        ]);
    }

    public function store()
    {

    }

    public function login()
    {
        return view('user.login');
    }

}
