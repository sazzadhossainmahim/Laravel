<?php

use App\Http\Controllers\practice;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::post('users', [practice::class, 'indexAction']);
Route::view('login', "users");

// middleware routes
Route::view('middlewarehome', "middlewarehome");
Route::view('middlewareuser', "middlewareuser");
Route::view('middlewarenoaccess', "middlewarenoaccess");



Route::fallback(function () {
    return "error page not found";
});



// --------------Group middleware
Route::view('gmhome', 'gmhome');
Route::view('gmnoaccess', 'gmnoaccess');
// Route::view('gmusers', 'gmusers');

Route::group(['middleware' => ['protectedPages']], function () {
    Route::view('gmusers', 'gmusers');
});

// ------------Route middleware------------
Route::view('ruser','routehome')->middleware('RprotectedPages');
Route::view('rhome','routemiddleuser');
Route::view('rnoaccess','routenoaccess');


// DAtabse configuration
Route::get('dbindex',[practice::class,'databaseindex']);

Route::get('dball',[practice::class,'databaseall']);

// Http Client configuration
Route::get('httpClient',[practice::class,'httpClient']);
