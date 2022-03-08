<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProfileController, WelcomeController, BlogController, FaqController, DashboardController, PostController, GradeController};

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
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::post('/blog', [BlogController::class, 'store']);
Route::get('/blog/create', [BlogController::class, 'create']);
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/{blog}/edit', [BlogController::class, 'edit']);
Route::put('/blog/{blog}', [BlogController::class, 'update']);
Route::delete('/blog/{blog}', [BlogController::class, 'destroy']);
//Route::resource('/blog', BlogController::class);


// faq page
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::post('/faq', [FaqController::class, 'store']);
Route::get('/faq/create', [FaqController::class, 'create']);
Route::get('/faq/{id}/edit', [FaqController::class, 'edit']);
Route::put('/faq/{id}', [FaqController::class, 'update']);
Route::delete('/faq/{id}', [FaqController::class, 'destroy']);
//Route::resource('/faq', FaqController::class);


// dashboard page
Route::resource('/dashboard', DashboardController::class);

// grades page
// Currently not working due to use of foreign key, would like to get feedback on how to properly apply if I have not fixed it by then
//Route::resource('/grades', GradeController::class);

// post page
Route::get('/post/{post}', [PostController::class, 'index']);
