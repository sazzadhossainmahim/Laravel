<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;

class PostController extends Controller
{
    //

    public function create(){
        if(Gate::allows('isAdmin')){
            dd('Admin Allowed');
        }else{
            dd('You are not Admin');
        }
    }

        public function delete(){
            if(Gate::denies('isAdmin')){
                dd('You are not admin');
            }
            else{
                dd('Admin allowed');
            }
        }

}
