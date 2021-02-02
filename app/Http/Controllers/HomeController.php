<?php

namespace App\Http\Controllers;
use App\Post;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        //dd("hello");

        $post = DB::table('posts')->paginate(1);
        return view('front.home', ['post' => $post]);
    }

    public function postDetails($id)
    {
        //dd($id);
        $post = Post::find($id);
        return view('front.pages.single_post', ['post' => $post]);
    }
}
