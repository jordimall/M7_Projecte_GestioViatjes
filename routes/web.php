<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

// Controladors Users
Route::get('/users',[UserController::class, 'index']);

// Controlador Publicactions
Route::get('/publications',[PublicationController::class, 'index'])->name('publications.index');
Route::get('/publications/show/{publication}',[PublicationController::class, 'show'])->name('publications.show');

// Controlador Comments
Route::get('/comments',[CommentController::class, 'index']);

// Controlador Categories
Route::get('/categories',[CategoryController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
