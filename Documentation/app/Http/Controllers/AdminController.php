<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class AdminController extends Controller
{
    public function index(){
        if(Gate::allows('isAdmin')){
            echo 'Admin user role is allowed';
        }
        else{
            echo 'Admin are not allowed';
        }
    }
}
