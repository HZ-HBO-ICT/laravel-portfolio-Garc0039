<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProfileController, WelcomeController, BlogController, FaqController, DashboardController, PostController};


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

// home page
Route::get('/', [WelcomeController::class, 'index']);

// profile page
Route::get('/profile', [ProfileController::class, 'index']);

// blog page
Route::get('/blog', [BlogController::class, 'index']);
Route::post('/blog', [BlogController::class, 'store']);
Route::get('/blog/create', [BlogController::class, 'create']);
Route::get('/blog/{blog}', [BlogController::class, 'showBlog']);

// faq page
Route::get('/faq', [FaqController::class, 'index']);
Route::post('/faq', [FaqController::class, 'store']);
Route::get('/faq/create', [FaqController::class, 'create']);

// dashboard page
Route::get('/dashboard', [DashboardController::class, 'index']);

// post page
Route::get('/post/{post}', [PostController::class, 'index']);
