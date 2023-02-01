<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for  your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
    //thùng rác
    Route::get('/trash', [CategoryController::class, 'trash'])->name('categories.trash');
    Route::get('/restore/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('/deleteforever/{id}', [CategoryController::class, 'deleteforever'])->name('categories.deleteforever');
});
//khách hàng
Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');
    Route::get('/detail/{id}', [ProductController::class, 'show'])->name('products.detail');
    //thùng rác
    Route::get('/trash', [ProductController::class, 'trash'])->name('products.trash');
    Route::get('/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
    Route::delete('/deleteforever/{id}', [ProductController::class, 'deleteforever'])->name('products.deleteforever');
});
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');  
});

    Route::prefix('groups')->group(function () {
    Route::get('/', [GroupController::class, 'index'])->name('group.index');
    Route::get('/create', [GroupController::class, 'create'])->name('group.create');
    Route::post('/store', [GroupController::class, 'store'])->name('group.store');
    Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
    Route::put('/update/{id}', [GroupController::class, 'update'])->name('group.update');
    Route::delete('/destroy/{id}', [GroupController::class, 'destroy'])->name('group.destroy');
    //thùng rác
    Route::get('/trash', [GroupController::class, 'trash'])->name('group.trash');
    Route::put('/restore/{id}', [GroupController::class, 'restore'])->name('group.restore');
    Route::delete('/forcedelete/{id}', [GroupController::class, 'forcedelete'])->name('group.forcedelete');
    Route::get('/detail/{id}', [GroupController::class, 'detail'])->name('group.detail');
    Route::put('/group_detail/{id}', [GroupController::class, 'group_detail'])->name('group.group_detail');
});