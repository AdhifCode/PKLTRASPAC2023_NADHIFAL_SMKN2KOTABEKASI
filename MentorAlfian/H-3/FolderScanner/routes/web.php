<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FolderScannerController;

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
// MentorAlfian/H-3/FolderScanner/resources/views/folder-scanner/index.blade.php/index.blade.php
Route::get('/', [FolderScannerController::class, 'index'])->name('folder-scanner.index');

Route::post('/scan', [FolderScannerController::class, 'scanFolder'])->name('folder-scanner.scan');
