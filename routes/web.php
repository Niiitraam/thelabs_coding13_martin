<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeSiteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ElementController;

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

Route::resource('/home-site', HomeSiteController::class);
Route::resource('/services', ServiceController::class);
Route::resource('/blog', BlogController::class);
Route::resource('/blog-post', BlogPostController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/elements', ElementController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
