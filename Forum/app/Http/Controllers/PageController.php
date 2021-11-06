<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('threads.show');
    }
    public function single()
    {
        return view('');
    }

    public function create()
    {
    }
    public function users()
    {
    }
    public function categoriesIndex()
    {
    }
    public function categoriesCreate()
    {
    }
    public function threadsIndex()
    {
    }
}
