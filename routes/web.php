<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
create - show from to create new listing
store - store new listing
edit - update listing
destroy - delete listing
*/

//show all listings
Route::get('/', 
    [ListingController::class, 'index']);

//show create form
Route::get('/listings/create', 
    [ListingController::class, 'create'])->middleware('auth');

//store listing data
Route::post('/listings', 
    [ListingController::class, 'store'])->middleware('auth');

//edit form
Route::get('/listings/{listing}/edit', 
    [ListingController::class, 'edit'])->middleware('auth');

//update listing
Route::put('/listings/{listing}', 
    [ListingController::class, 'update'])->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', 
    [ListingController::class, 'delete'])->middleware('auth');

//manage listings
Route::get('/listings/manage',
    [ListingController::class, 'manage'])->middleware('auth');

//show single listing
Route::get('/listings/{listing}', 
    [ListingController::class, 'show']);

//register/create form
Route::get('/register', 
    [UserController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users', 
    [UserController::class, 'store']);

//user logout
Route::post('/logout', 
    [UserController::class, 'logout'])->middleware('auth');

//user login form
Route::get('/login', 
    [UserController::class, 'login'])->name('login')->middleware('guest');

//user login
Route::post('/users/authenticate',
    [UserController::class, 'authenticate']);
    