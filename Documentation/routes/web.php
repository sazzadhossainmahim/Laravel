<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
// use DripEmailer;

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

// -----------------Artisan Command ------ -----------
// Clousure Commands
// Artisan::command('mail:send{user}', function($user){
//     $this->info("Sending email to: {$user}!");
// });
// // Type-Hinting Dependencies
// Artisan::command('mail:send{user}', function(DripEmailer $drip, $user){
//     $drip->send(User::find($user));
// });


//  php artisan config:clear

Route::get('clear-config', function (){
    Artisan::call('config:clear');
    return "Config Cleared";
});

Route::get('cache-cache', function (){
    Artisan::call('config:cache');
    return "Config Settings Updated";
});
