<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth:admin');
Route::get('admin/login', [App\Http\Controllers\CustomAuthController::class, 'adminlogin'])->name('admin/login');
Route::post('admin/login', [App\Http\Controllers\CustomAuthController::class, 'checkAdmin'])->name('check.admin');


//Category
Route::get('/CategoryIndex', [App\Http\Controllers\CategoryController::class, 'index'])->name('Category/index')->middleware('auth:admin');
Route::post('/CategoryStore', [App\Http\Controllers\CategoryController::class, 'store'])->name('Category/store')->middleware('auth:admin');
Route::get('/CategoryCreate', [App\Http\Controllers\CategoryController::class, 'create'])->name('Category/create')->middleware('auth:admin');
Route::get('/CategoryEdit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('Category/edit')->middleware('auth:admin');
Route::post('/CategoryUpdate/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('Category/update')->middleware('auth:admin');
Route::get('Category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('Category/delete')->middleware('auth:admin');


//Images
Route::get('/imageIndex', [App\Http\Controllers\ImageController::class, 'index'])->name('Image/index')->middleware('auth:admin');
Route::post('image/store', [App\Http\Controllers\ImageController::class, 'store'])->name('Image/store')->middleware('auth:admin');
Route::get('/imageCreate', [App\Http\Controllers\ImageController::class, 'create'])->name('Image/create')->middleware('auth:admin');
Route::get('/imageEdit/{id}', [App\Http\Controllers\ImageController::class, 'edit'])->name('Image/edit')->middleware('auth:admin');
Route::post('/imageUpdate/{id}', [App\Http\Controllers\ImageController::class, 'update'])->name('Image/update')->middleware('auth:admin');
Route::get('image/delete/{id}', [App\Http\Controllers\ImageController::class, 'destroy'])->name('Image/delete')->middleware('auth:admin');
