<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function showPost()
    {
        $posts = Post::all();
        return view('dashboard', ['posts' => $posts]);
    }
}
