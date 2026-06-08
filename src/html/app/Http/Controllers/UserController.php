<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
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

//        return view('user.create')->with([
//            'name' => '<h3>John Doe</h3>',
//        ]);

        return view('user.create', [
            'name' => 'John Doe',
            'age' => 32,
            'users' => $users,
        ]);
    }

//    public function store(Request $request)
//    {
////        dump($request->input('name'));
////        dump($request->name);
////        dump($request->input());
////        dump($request->collect());
////        dump($request->collect()->after('miumiu@iuwiu.com'));
////        dump($request->boolean('agree'));
////        dump($request->only(['email', 'password']));
////        dump($request->except(['email', 'password']));
////        dump($request->merge(['test' => 123])->all());
//        ($request->merge(['test' => 123])->all());
//
////        $request->flash();
//
//        $validated = $request->validate([
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
//            'password' => ['required', 'min:6', 'confirmed'],
//            'agree' => ['required'],
//        ], [
//            'name.required' => 'Oops! name is required...',
//            'email.required' => 'Oops! email is required...',
//
//        ]);
//
//        User::create($request->all());
//
//        return redirect()->route('register')->with('success', 'User created successfully');
//    }

    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();

        User::create($request->all());

        return redirect()->route('register')->with('success', 'User created successfully');


    }

    public function login()
    {
        return view('user.login');
    }

}
