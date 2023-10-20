<?php

use Illuminate\Support\Facades\Route;
use App\Http\ControllersApp\Http\Controllers;
use App\Http\Controllers\BusinessController;

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

// Route::get('/', [BusinessController::class, 'index']);
Route::get('/', function () {

    $daftar = DB::table('businesses')->get();

    return view('index/index', ['daftar' => $daftar]);
});

Route::post('/index/post', [BusinessController::class, 'importExcel']);

// Route::get('/', function () {
//     return view('welcome');
// });
