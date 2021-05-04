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
}
