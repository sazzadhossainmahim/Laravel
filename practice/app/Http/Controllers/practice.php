<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// database
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;
// http routes Client


class practice extends Controller
{
    public function indexAction(Request $res)
    {
        return $res->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        return $res->input();
    }

    function databaseindex()
    {
        return DB::select("select * from codestep ");
    }

    function databaseall()
    {
        return User::all();
    }
    function httpClient()
    {
        $collection =  Http::get("https://reqres.in/api/users?page");
        return view('apiuser', ['collection' => $collection['data']]);
    }
}
