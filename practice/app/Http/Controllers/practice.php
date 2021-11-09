<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practice extends Controller
{
    public function indexAction(Request $res){
        return $res->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        return $res->input();
    }
}
