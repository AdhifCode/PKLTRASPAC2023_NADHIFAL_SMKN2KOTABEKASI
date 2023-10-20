<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback']);
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('/auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
// Route::get('/auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ID App Meta 902458841298687
// Key App Meta 66b6d838097b1afc5f99412fb2efdb79
