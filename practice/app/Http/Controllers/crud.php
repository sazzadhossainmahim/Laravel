<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crud extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('surfsidemedia')->get();
        return view('DB.posts', compact('posts'));
    }

    public function createcrud()
    {
        return view('crud.addpost');
    }
    public function createcrudSubmit()
    {
        DB::table('surfsidemedia')->insert([
            'title' => '$request->title',
            'body' => '$request->body'
        ]);
        return back()->with('post_created', 'post has been created successfully');

    }
}
