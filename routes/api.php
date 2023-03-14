<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RegisterController;
use App\Http\Controllers\api\publicationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Internament ja estàn definides les rutes per als GET, POST, PUT i DELETE.
// Route::resource('/categories', App\Http\Controllers\api\CategoryController::class);
// Route::resource('/comments', App\Http\Controllers\api\CommentController::class);
// Route::resource('/users', App\Http\Controllers\api\UserController::class);
// Route::resource('/home', App\Http\Controllers\api\homeController::class);
// Route::resource('/publications', App\Http\Controllers\api\PublicationController::class);
// Route::put('/users/changePassword/{idUser}',[App\Http\Controllers\api\UserController::class, 'changePassword']);

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::get('/logout/{idUser}', [RegisterController::class, 'logout']);
Route::get('/publications',[PublicationController::class, 'index']);
Route::get('/publications/{id}',[PublicationController::class, 'show']);
Route::resource('/home', App\Http\Controllers\api\homeController::class);


Route::middleware('auth:sanctum')->group( function () {
	// Internament ja estàn definides les rutes per als GET, POST, PUT i DELETE.
    Route::resource('/categories', App\Http\Controllers\api\CategoryController::class);
    Route::resource('/comments', App\Http\Controllers\api\CommentController::class);
    Route::resource('/users', App\Http\Controllers\api\UserController::class);
    Route::put('/users/changePassword/{idUser}',[App\Http\Controllers\api\UserController::class, 'changePassword']);

Route::post('/publications',[PublicationController::class, 'store']);
Route::post('/publications/{id}',[PublicationController::class, 'update']);
Route::delete('/publications/{id}',[PublicationController::class, 'destroy']);

});

Route::get('/login', function () {
    return "Has de validar-te com a usuari!";
})->name("login");
