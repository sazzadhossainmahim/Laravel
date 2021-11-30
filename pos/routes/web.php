<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});


// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::resource('/orders', [OrderController::class]);
// Route::resource('/products', [ProductController::class]);
// Route::resource('/suppliers', [SupplierController::class]);
// Route::resource('/users', [UserController::class]);
// Route::resource('/companies', [CompanyController::class]);
// Route::resource('/transactions', [TransactionController::class]);
