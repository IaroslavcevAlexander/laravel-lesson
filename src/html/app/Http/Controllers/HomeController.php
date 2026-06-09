<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{

    public function index(Request $request)
    {

//        dump($request->session()->all());

//        $request->session()->put(['key', 'Hello, World!']);

//        session(['key2' => 'Hi, World!']);


//        dump($request->session()->get('key'));
//        dump(session('key2'));

        $product1 = [
            'id' => 1,
            'title' => 'Product 1',
            'price' => 100,
            'quantity' => 2,
        ];

        $product2 = [
            'id' => 2,
            'title' => 'Product 2',
            'price' => 150,
            'quantity' => 5,
        ];

        $product3 = [
            'id' => 3,
            'title' => 'Product 3',
            'price' => 350,
            'quantity' => 3,
        ];

//        session(['cart' => [$product1]]);
//        session()->push('cart', $product2);
//        session(['cart.0.quantity' => 4]);
//        session()->push('cart', $product3);


//        session()->forget([0, 1]);
//        session()->forget(['cart.2']);

        session()->flash('tets', 'Test flash');
        return redirect()->route('users.index'); 

//        dump(session('tets'));


//        dump(session()->all());

        $posts = Post::with('category')->paginate(3)->withQueryString();

        return view('home', compact('posts'));
    }

}
