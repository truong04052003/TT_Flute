<?php

use App\Http\Controllers\Api\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CartController;
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

Route::get('auth/profile', [ApiAuthController::class, 'userProfile']);

//Product
Route::get('product_list', [ProductController::class, 'product_list']);
Route::get('product_list/search', [ProductController::class, 'search']);
Route::get('product_detail/{id}', [ProductController::class, 'product_detail']);
Route::get('product_images/{id}', [ProductController::class, 'image_detail']);
Route::get('category_list', [ProductController::class, 'category_list']);
Route::get('trendingProduct', [ProductController::class, 'trendingProduct']);
Route::get('productnew', [ProductController::class, 'productnew']);
Route::get('product_list/search', [ProductController::class, 'search']);
//Cart
Route::get('list-cart', [CartController::class, 'getAllCart']);
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart']);
Route::get('remove-to-cart/{id}', [CartController::class, 'removeToCart']);
Route::get('update-Cart/{id}/{quantity}', [CartController::class, 'updateCart']);
Route::get('remove-all-cart', [CartController::class, 'removeAllCart']);
