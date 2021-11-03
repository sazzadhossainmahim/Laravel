<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\Resturant;
use App\Models\User;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }

    function list()
    {
        // return User::all();
        $data = Restaurant::all();
        return view('list', ["data" => $data]);
    }

    function add(Request $req)
    {
        // return $req->input();
        $resto = new Restaurant();
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address = $req->input('address');
        $resto->save();

        $req->session()->flash('status', 'success');

        return redirect('list'); 

    }
}
 