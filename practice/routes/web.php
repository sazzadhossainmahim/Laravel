<?php

use App\Http\Controllers\practice;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::post('users', [practice::class, 'indexAction']);
Route::view('login', "users");
