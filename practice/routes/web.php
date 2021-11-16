<?php

use App\Http\Controllers\crud;
use App\Http\Controllers\practice;
use Illuminate\Support\Facades\Route;


Route::get('/', [practice::class, "componentindex"])->name('componentindex');


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
Route::view('ruser', 'routehome')->middleware('RprotectedPages');
Route::view('rhome', 'routemiddleuser');
Route::view('rnoaccess', 'routenoaccess');


// DAtabse configuration
Route::get('dbindex', [practice::class, 'databaseindex']);

Route::get('dball', [practice::class, 'databaseall']);

// Http Client configuration
Route::get('httpClient', [practice::class, 'httpClient']);


//
Route::get('/h/{n}', [practice::class, 'h'])->name('home.index');

// views
Route::get('hv', [practice::class, 'h'])->name('home.user');


// Http Respon
Route::get('getHttp', [practice::class, 'getHttp']);
Route::get('getHttpid/{id}', [practice::class, 'getHttpid'])->name('posts.getpostsid');

// Fluent string
Route::get('fluentString', [practice::class, 'fluentString']);

// Http Request Method
Route::get('httprequest', [practice::class, 'httprequest'])->middleware('checkuser');
Route::post('httpRequestSubmit', [practice::class, 'httpRequestSubmit'])->name('httpRequestSubmit');

// Http Session
Route::get('/httpSession/get', [practice::class, 'GetSessionData'])->name('session.get');
Route::get('/httpSession/set', [practice::class, 'StoreSessionData'])->name('session.store');
Route::get('/httpSession/remove', [practice::class, 'DeleteSessionData'])->name('session.delete');


//
// Getting Started with database
Route::get('/dbStart', [practice::class, 'dbStart'])->name('dbStart');

Route::get('/crudadd',[crud::class, 'createcrud'])->name('createcrud');
Route::post('/crudpost',[crud::class, 'createcrudSubmit'])->name('crudpost');


// using modal
Route::get('modal',[practice::class, 'modal',])->name('modal');
