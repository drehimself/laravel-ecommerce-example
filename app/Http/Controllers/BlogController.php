<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        $response = \Response::make($posts, 200);
        return $response;
    }
    
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        // dd($post);
        return view('post')->with([
            'post' => $post
        ]);
    }
}
