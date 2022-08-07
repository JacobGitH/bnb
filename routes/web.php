<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\CommentsController;

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

//shows form to create a post 
Route::get('/post/create', [PostsController::class, 'create'])->middleware('auth');

//stores form data
Route::post('/post/store', [PostsController::class, 'store'])->middleware('auth');

//shows users own postings
Route::get('/post/user', [PostsController::class, 'showUserPosts'])->middleware('auth');

//shows edit form for users post
Route::get('/posts/user/edit/{posts}', [PostsController::class, 'createUsersPosts'])->middleware('auth');

//
Route::put('/posts/user/edit/{posts}', [PostsController::class, 'updateUsersPosts'])->middleware('auth');


Route::delete('/posts/user/delete/{posts}', [PostsController::class, 'deleteUsersPosts'])->middleware('auth');

//shows single listing 
Route::get('/post/{posts}', [PostsController::class, 'show']);



//Comments
//stores comment
Route::post('/comments/store', [CommentsController::class, 'store'])->middleware('auth');

//booking
//stores booking
Route::post('/booking/store', [BookingsController::class, 'store']);




//Users
//shows register page
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

//stores users data
Route::post('/register/user', [UserController::class, 'store'])->middleware('guest');

//shows login page
Route::get('/login', [UserController::class, 'login'])->middleware('guest');

//logs in user
Route::post('/login/user', [UserController::class, 'authenticate'])->middleware('guest');

//logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');



//fallback
//for now just commented
// Route::fallback(FallbackController::class)

