<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RegisterController;

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

Route::post('register', [RegisterController::class, 'register']);

Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Internament ja estàn definides les rutes per als GET, POST, PUT i DELETE.
Route::resource('/categories', App\Http\Controllers\api\CategoryController::class);
Route::resource('/comments', App\Http\Controllers\api\CommentController::class);
Route::resource('/home', App\Http\Controllers\api\homeController::class);
Route::resource('/publications', App\Http\Controllers\api\publicationController::class);
