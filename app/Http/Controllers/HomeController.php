<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        //dd("hello");
        $post = Post::all();
        return view('front.home', ['post' => $post]);
    }
}
