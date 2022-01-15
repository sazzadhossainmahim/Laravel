<?php

use App\Console\Commands\view;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::get('/administration',function(){
//     if(Gate::allows('access-admin')){
//         return view('Gate.gate');
//     }
//     else{
//         echo 'You are not allowed to pass';
//     }
// });

// Admin Only
// Route::middleware('can:isAdmin')->prefix('admin')->group(function () {
//     // Mention all admin routes
//     Route::get('/', 'AdminController@index');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('admin-view', 'HomeController@index')->name('admin.view');
});
