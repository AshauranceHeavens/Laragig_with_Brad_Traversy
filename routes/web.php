<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ListingController;
use PhpParser\Node\Expr\BinaryOp\NotEqual;

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

Route::get('/',  [ListingController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');


Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// route model binding
Route::get('/listings/{listing}', [ListingController::class, 'show']);


Route::get('/register', [userController::class, 'create'])->name('register')->middleware('guest');


// NOTE: USERS routes

Route::post('/users', [userController::class, 'store']);

Route::post('/logout', [userController::class, 'logout'])->middleware('auth');

Route::get('/login', [userController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [userController::class, 'authenticate']);
