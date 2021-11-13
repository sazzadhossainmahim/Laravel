<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// database
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use League\Flysystem\Adapter\Polyfill\StreamedTrait;
use Illuminate\Support\Str;
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
    public function h()
    {
        $name = 'mahim';
        $p = array(
            "name" => "mahim",
            "email" => "mahim@gmail.com",
            "phone" => "2345"
        );
        return view('home.user', compact('name', 'p'));
    }

    public function componentindex()
    {
        $fruits = array('Mango', 'Orange', 'banana', 'apple');
        return view('welcome', compact('fruits'));
    }

    // Http method
    public function getHttp()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function getHttpid($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }

    // Fluent String

    public function fluentString()
    {
        echo '<h1> hi there;</h1>';
        $slice = Str::of('Welcome to my work ')->after('Welcome to');
        echo $slice;

        // aftet last
        $slice2 = Str::of('App\Http\Controller\practice')->afterLast('\\');
        echo $slice2 . '<br>';

        $string = Str::of('Hellow')->append('work');
        echo $string .'<br>';

        $result = Str::of('Laravel 8')->lower();
        echo $result . '<br>';

        $replaced = Str::of('Laravel 8')->replace('8','7');
        echo $replaced . '<br>';

        $converted = Str::of('this is a title')->title();
        echo $converted .'<br>';

        $slug  = Str::of('Laravel 8 Framework')->slug('-');
        echo $slug .'<br>';


        $str3 = Str::of('this is a')->upper();
        echo $str3 .'<br>';
    }

    // Stub Customization
    
}
