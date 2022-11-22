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

// Controlador Publicactions
Route::get('/publications',[PublicationController::class, 'index'])->name('publications.index');
Route::get('/publications/show/{publication}',[PublicationController::class, 'show'])->name('publications.show');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', function () {
//     return view('welcome');
// });

// Per a utilitzar els MIDDLEWARES
Route::group(['middleware' => 'auth'], function () { // usuari autentificat

    // Controladors Users
    Route::get('/users/show/{user}',[UserController::class, 'show'])->name('users.show');
    // Route::get('/users/update/{user}',[UserController::class, 'edit'])->name('users.edit');
    // Route::post('/users/update/{user}',[UserController::class, 'update'])->name('users.update');

    // Controlador Publicactions
    // Route::get('/publications/formnew',[PublicationController::class, 'create'])->name('publications.formnew');
    // Route::post('/publications/save',[PublicationController::class, 'store'])->name('publications.save');
    // Route::get('/publications/update/{publication}',[PublicationController::class, 'edit'])->name('publications.edit');
    // Route::post('/publications/update/{publication}',[PublicationController::class, 'update'])->name('publications.update');
    // Route::post('/publications/delete/{publication}',[PublicationController::class, 'destroy'])->name('publications.destroy');

    // Controlador Comments
    // Route::get('/comments/formnew',[CommentController::class, 'create'])->name('comments.formnew');
    // Route::post('/comments/save',[CommentController::class, 'store'])->name('comments.save');
    // Route::get('/comments/update/{comment}',[CommentController::class, 'edit'])->name('comments.edit');
    // Route::post('/comments/update/{comment}',[CommentController::class, 'update'])->name('comments.update');
    // Route::post('/comments/delete/{comment}',[CommentController::class, 'destroy'])->name('comments.destroy');

    // Route::group(['middleware' => 'is_admin'], function () { // usuari administrador
    Route::group(['middleware' => 'role:admin'], function () {

        // Controladors Users
        Route::get('/users',[UserController::class, 'index'])->name('users.index');
        // Route::get('/users/delete/{user}',[UserController::class, 'destroy'])->name('users.destroy');

        // Controlador Categories
        Route::get('/categories',[CategoryController::class, 'index']);
        // Route::get('/categories/formnew',[CategoryController::class, 'create'])->name('categories.formnew');
        // Route::post('/categories/save',[CategoryController::class, 'store'])->name('categories.save');
        // Route::get('/categories/update/{comment}',[CategoryController::class, 'edit'])->name('categories.edit');
        // Route::post('/categories/update/{comment}',[CategoryController::class, 'update'])->name('categories.update');
        // Route::post('/categories/delete/{comment}',[CategoryController::class, 'destroy'])->name('categories.destroy');

        // Controlador Comments
        Route::get('/comments',[CommentController::class, 'index']);

    });
});