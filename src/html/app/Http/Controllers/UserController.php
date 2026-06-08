<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function store(Request $request)
    {
//        dump($request->input('name'));
//        dump($request->name);
//        dump($request->input());
//        dump($request->collect());
//        dump($request->collect()->after('miumiu@iuwiu.com'));
//        dump($request->boolean('agree'));
//        dump($request->only(['email', 'password']));
//        dump($request->except(['email', 'password']));
//        dump($request->merge(['test' => 123])->all());
        ($request->merge(['test' => 123])->all());

//        $request->flash();

        User::create($request->all());

        return redirect()->route('register')->withInput();
    }

    public function login()
    {
        return view('user.login');
    }

}
