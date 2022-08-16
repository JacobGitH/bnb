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


//stores form data


//shows users own postings


Route::group(['middleware' => ['auth']], function(){
    Route::get('/post/create', [PostsController::class, 'create']);
    Route::post('/post/store', [PostsController::class, 'store']);
    Route::get('/post/user', [PostsController::class, 'showUserPosts']);
    Route::get('/user/bookings', [BookingsController::class, 'showBookings']);
    Route::get('/posts/user/edit/{posts}', [PostsController::class, 'createUsersPosts']);
    Route::put('/posts/user/edit/{posts}', [PostsController::class, 'updateUsersPosts']);
    Route::delete('/posts/user/delete/{posts}', [PostsController::class, 'deleteUsersPosts']);
    Route::post('/comments/store/{post}', [CommentsController::class, 'store']);
    Route::get('/posts/user/bookings/{post}', [BookingsController::class, 'showAllBookingsOfPost']);
    Route::post('/booking/store/{post}', [BookingsController::class, 'store']);
    Route::post('/logout', [UserController::class, 'logout']);
});

Route::group(['middleware' => ['guest']], function(){
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register/user', [UserController::class, 'store']);
    Route::get('/login', [UserController::class, 'login']);
    Route::post('/login/user', [UserController::class, 'authenticate']);    
});

Route::get('/post/{posts}', [PostsController::class, 'show']);


