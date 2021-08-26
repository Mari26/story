<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Products/1', [HomeController::class, 'getProducts']);
Route::get('/Provider/1', [HomeController::class, 'getProviders']);

//Route::get('/user/delete', 'App\Http\Controllers\UsersController@delete')->middleware('can:is_admin');
//Route::get('/user/show', 'App\Http\Controllers\UsersController@show')->middleware('can:is_user');
