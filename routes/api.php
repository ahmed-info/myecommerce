<?php

use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\TestApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["middleware" => "auth:sanctum"], function () {
    Route::get('/dashboard/category/index', [CategoryApiController::class, 'categryindex']);
    Route::post('/dashboard/category/insert', [CategoryApiController::class, 'insert']);
});

Route::put('/dashboard/category/update/{id}', [CategoryApiController::class, 'update']);
Route::delete('/dashboard/category/delete/{id}', [CategoryApiController::class, 'remove']);
Route::post('/register', [AuthApiController::class, 'register']);
Route::post('/login', [AuthApiController::class, 'login']);
