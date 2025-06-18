<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\MemberController; 
use App\Http\Controllers\GubunController; 
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;




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

Route::get('/', [OrderController::class, 'index']);

Route::resource('main_one',MainController::class);

Route::resource('member_one',MemberController::class);

Route::resource('gubun_one',GubunController::class);

Route::resource('product_one', ProductController::class);

Route::resource('login_one', LoginController::class);

Route::post('login_one/cheak', [LoginController::class, 'cheak'])->name('login_one.cheak');
Route::post('login_one/logout', [LoginController::class, 'logout'])->name('login_one.logout');

Route::resource('order_one', OrderController::class);






