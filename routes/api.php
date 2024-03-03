<?php

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

//login api
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

//logout api
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

//products api
Route::apiResource('/products/list', App\Http\Controllers\Api\ProductController::class)->middleware('auth:sanctum');

//categories api
Route::apiResource('/categories/list/all', App\Http\Controllers\Api\CategoriesController::class)->middleware('auth:sanctum');

Route::post('/save-order', [App\Http\Controllers\Api\OrderController::class, 'saveOrder'])->middleware('auth:sanctum');

Route::get('/discount', [App\Http\Controllers\Api\DiscountController::class, 'index'])->middleware('auth:sanctum');
Route::post('/discount', [App\Http\Controllers\Api\DiscountController::class, 'store'])->middleware('auth:sanctum');
