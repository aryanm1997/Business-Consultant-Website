<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home']);
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/industries', [PageController::class, 'industries']);
Route::get('/testimonials', [PageController::class, 'testimonials']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/book-consultation', [PageController::class, 'consultation']);
