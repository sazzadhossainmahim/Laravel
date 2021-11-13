<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// ROuting routes with api, with postman
Route::get('/auser/{name?}', function ($name = null) {
    // optional parameter, just add {?} , and callback function = null ) > will be optional parameter
    // return 'Hi AUsers';
    // Required Parameter>>
    return 'Hi' . $name;

    // for routes constrain
});
// ->where('name','[a-zA-Z]+');

Route::get('/products/{id?}', function ($id = null) {
    return 'Products is is ' . $id;
});
// ->where('id','[0-9]+');  ----> it can be in route serversproviders


// sometime we  matchMethod for multiple http requests
Route::match(['get', 'post'], '/matchmethod', function (Request $req) {
    return 'Request Method is ' . $req->method();
});
