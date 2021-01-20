<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeSiteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\HomeS1Controller;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ButtonController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\MapController;

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
Route::resource('/contact', ContactController::class);
Route::resource('/elements', ElementController::class);
Route::resource('/titre', TitreController::class);
Route::resource('/homeS1', HomeS1Controller::class);
Route::resource('/video', VideoController::class);
Route::resource('/temoignage', TemoignageController::class);
Route::resource('/team', TeamController::class);
Route::resource('/button', ButtonController::class);
Route::resource('/article', ArticleController::class);
Route::post('/articleEdit/{id}', [ArticleController::class, 'update2']);
Route::resource('/commentaire', CommentaireController::class);
Route::resource('/map', MapController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
