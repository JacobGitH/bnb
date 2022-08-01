<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;

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
// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 

//Posts
//shows all Posts
Route::get('/', [PostsController::class, 'index'])->name('home');

Route::get('/post/{posts}', [PostsController::class, 'show']);


//Users
//shows register page
Route::get('/register', [UserController::class, 'register']);

//stores users data
Route::post('/register/user', [UserController::class, 'store']);

//shows login page
Route::get('/login', [UserController::class, 'login']);

//logs in user
Route::post('/login/user', [UserController::class, 'authenticate']);


