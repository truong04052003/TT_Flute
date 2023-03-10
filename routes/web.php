<?php

use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboarController;
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


// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/forget-password', [UserController::class, 'forget_password'])->name('forget-password');
Route::post('/post-forget-password', [UserController::class, 'post_forget_password'])->name('post-forget-password');

Route::prefix('/')->middleware(['auth', 'prevent-back-history'])->group(function () {
    Route::get('/', [DashboarController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
        //th??ng r??c
        Route::get('/trash', [CategoryController::class, 'trash'])->name('categories.trash');
        Route::get('/restore/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
        Route::delete('/deleteforever/{id}', [CategoryController::class, 'deleteforever'])->name('categories.deleteforever');
    });
    //kh??ch h??ng
    Route::get('/customer', [CustomerController::class, 'index'])->name('customers.index');
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/store', [ProductController::class, 'store'])->name('products.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');
        Route::get('/detail/{id}', [ProductController::class, 'show'])->name('products.detail');
        //th??ng r??c
        Route::get('/trash', [ProductController::class, 'trash'])->name('products.trash');
        Route::get('/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
        Route::delete('/deleteforever/{id}', [ProductController::class, 'deleteforever'])->name('products.deleteforever');
        //xu???t file excel
        Route::get('/export-products', [ProductController::class, 'export'])->name('products.export');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
        Route::post('update-password/{id}', [UserController::class, 'update_password'])->name('user-update-password');
    });

    Route::prefix('groups')->group(function () {
        Route::get('/', [GroupController::class, 'index'])->name('group.index');
        Route::get('/create', [GroupController::class, 'create'])->name('group.create');
        Route::post('/store', [GroupController::class, 'store'])->name('group.store');
        Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
        Route::put('/update/{id}', [GroupController::class, 'update'])->name('group.update');
        Route::delete('/destroy/{id}', [GroupController::class, 'destroy'])->name('group.destroy');
        //th??ng r??c
        Route::get('/trash', [GroupController::class, 'trash'])->name('group.trash');
        Route::get('/restore/{id}', [GroupController::class, 'restore'])->name('group.restore');
        Route::delete('/forcedelete/{id}', [GroupController::class, 'forcedelete'])->name('group.forcedelete');
        Route::get('/detail/{id}', [GroupController::class, 'detail'])->name('group.detail');
        Route::put('/group_detail/{id}', [GroupController::class, 'group_detail'])->name('group.group_detail');
    });
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/detail/{id}', [OrderController::class, 'show'])->name('orders.detail');
    });

    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/export-orders', [OrderController::class, 'export'])->name('orders.export');
        Route::get('/show/{id}', [OrderController::class, 'show'])->name('orders.show');
        Route::get('/wait', [OrderController::class, 'wait'])->name('orders.wait');
        Route::get('/cancel', [OrderController::class, 'cancel'])->name('orders.cancel');
        Route::get('/browser', [OrderController::class, 'browser'])->name('orders.browser');
        Route::put('/{id}', [OrderController::class, 'update'])->name('orders.update');
    });
    Route::prefix('suppliers')->group(function () {
        Route::get('/', [SupplierController::class, 'index'])->name('suppliers.index');
        Route::get('/create', [SupplierController::class, 'create'])->name('suppliers.create');
        Route::post('/store', [SupplierController::class, 'store'])->name('suppliers.store');
        Route::get('/edit/{id}', [SupplierController::class, 'edit'])->name('suppliers.edit');
        Route::put('/update/{id}', [SupplierController::class, 'update'])->name('suppliers.update');
        Route::delete('/destroy/{id}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
        //th??ng r??c
        Route::get('/getTrashed', [SupplierController::class, 'getTrashed'])->name('suppliers.getTrashed');
        Route::get('/restore/{id}', [SupplierController::class, 'restore'])->name('suppliers.restore');
        Route::delete('/force_destroy/{id}', [SupplierController::class, 'force_destroy'])->name('suppliers.forcedelete');
    });
});
