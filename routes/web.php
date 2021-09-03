<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikesController;
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

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('login',[LoginController::class ,'index'])->name('login');
Route::post('login',[LoginController::class ,'store']);

Route::post('logout',[LogoutController::class ,'store'])->name('logout');

Route::get('register',[RegisterController::class,'index'])->name('registration');
Route::post('register',[RegisterController::class,'store'])->name('submit_registration');

//likes router
Route::post('/posts/{post}/likes',[PostLikesController::class,'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes',[PostLikesController::class,'destroy'])->name('posts.likes');


Route::get('posts',[PostController::class,'index'])->name('posts');
Route::post('posts',[PostController::class,'store'])->name('posts');

Route::get('/', function () {
    return view('index');
})->name('home');
