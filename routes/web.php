<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
