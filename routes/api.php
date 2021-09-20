<?php

use App\Http\Controllers\Api\StudentApiController;
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

Route::post('add',[StudentApiController::class,'add']);
Route::get('all',[StudentApiController::class,'getall']);
Route::get('find/{id}',[StudentApiController::class,'find']);
Route::put('update/{id}',[StudentApiController::class,'update']);
Route::delete('delete/{id}',[StudentApiController::class,'delete']);
