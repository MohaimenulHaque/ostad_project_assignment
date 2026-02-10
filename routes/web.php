<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
