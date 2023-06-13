<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () {
        return view('posts', [
            'title' => 'allposts',
            'active' => 'posts',
            'posts' => latest()
        ])
    }
}
