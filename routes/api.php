<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Instead of defining each route separately
Route::apiResource('/petitions', \App\Http\Controllers\PetitionController::class);

//Route::resource('/petitions', \App\Http\Controllers\PetitionController::class)->only(['index', 'store']);

Route::resource('/authors', \App\Http\Controllers\AuthorController::class)->only([
    'index','show'
]);
