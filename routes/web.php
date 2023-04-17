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
|0
*/

define('PAGINATION_COUNTER',6);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Admin
Route::get('admin/login', [App\Http\Controllers\Admin\CustomAuthController::class, 'adminlogin'])->name('admin/login');
Route::post('admin/login', [App\Http\Controllers\Admin\CustomAuthController::class, 'checkAdmin'])->name('check.admin');

Route::group(['middleware' => 'auth:admin'],function(){
    //home
    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    //Category
    Route::group(['prefix' => 'Category'],function(){
        Route::get('Index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('Category/index');
        Route::post('Store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('Category/store');
        Route::get('Create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('Category/create');
        Route::get('Edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('Category/edit');
        Route::post('Update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('Category/update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('Category/delete');
        Route::get('Show/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('Category/show');
    });

    //Images
    Route::group(['prefix' => 'Image'],function(){
        Route::get('Index', [App\Http\Controllers\Admin\ImageController::class, 'index'])->name('Image/index');
        Route::post('store', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('Image/store');
        Route::get('Create', [App\Http\Controllers\Admin\ImageController::class, 'create'])->name('Image/create');
        Route::get('Edit/{id}', [App\Http\Controllers\Admin\ImageController::class, 'edit'])->name('Image/edit');
        Route::post('Update/{id}', [App\Http\Controllers\Admin\ImageController::class, 'update'])->name('Image/update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('Image/delete');
    });

    //FAQ
    Route::group(['prefix' => 'FAQ'],function(){
        Route::get('Index', [App\Http\Controllers\Admin\FAQController::class, 'index'])->name('FAQ/index');
        Route::post('Store', [App\Http\Controllers\Admin\FAQController::class, 'store'])->name('FAQ/store');
        Route::get('Create', [App\Http\Controllers\Admin\FAQController::class, 'create'])->name('FAQ/create');
        Route::get('Edit/{id}', [App\Http\Controllers\Admin\FAQController::class, 'edit'])->name('FAQ/edit');
        Route::post('Update/{id}', [App\Http\Controllers\Admin\FAQController::class, 'update'])->name('FAQ/update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\FAQController::class, 'destroy'])->name('FAQ/delete');
    });

    //Section
    Route::group(['prefix' => 'Section'],function(){
        Route::get('Index', [App\Http\Controllers\Admin\QASectionsController::class, 'index'])->name('section/index');
        Route::post('Store', [App\Http\Controllers\Admin\QASectionsController::class, 'store'])->name('section/store');
        Route::get('Create', [App\Http\Controllers\Admin\QASectionsController::class, 'create'])->name('section/create');
        Route::get('Edit/{id}', [App\Http\Controllers\Admin\QASectionsController::class, 'edit'])->name('section/edit');
        Route::post('Update/{id}', [App\Http\Controllers\Admin\QASectionsController::class, 'update'])->name('section/update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\QASectionsController::class, 'destroy'])->name('section/delete');
        Route::get('Show/{id}', [App\Http\Controllers\Admin\QASectionsController::class, 'show'])->name('section/show');
    });

    //Users
    Route::group(['prefix' => 'User'],function(){
        Route::get('Index', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('User/index');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('User/delete');
    });

    //contact us admin
    Route::group(['prefix' => 'Contact'],function(){
        Route::get('Index', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contact/index');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('contact/delete');
    });

    //Design
    Route::group(['prefix' => 'Design'],function(){
        Route::get('Index', [App\Http\Controllers\Admin\DesignController::class, 'index'])->name('design/index');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\DesignController::class, 'destroy'])->name('design/delete');
    });

    //comments
    Route::group(['prefix' => 'Comment'],function(){
        Route::get('Index', [App\Http\Controllers\Admin\CommentController::class, 'index'])->name('comment/index');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\CommentController::class, 'destroy'])->name('comment/delete');
    });
});


// user routes

Route::group(['middleware' => 'auth'],function(){
    //profile
    Route::group(['prefix' => 'Profile'],function(){
        Route::get('/{id}', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('profile/index');
        Route::post('Store', [App\Http\Controllers\User\ProfileController::class, 'store'])->name('profile/store');
        Route::get('Create', [App\Http\Controllers\User\ProfileController::class, 'create'])->name('profile/create');
        Route::get('Edit/{id}', [App\Http\Controllers\User\ProfileController::class, 'edit'])->name('profile/edit');
        Route::post('Update/{id}', [App\Http\Controllers\User\ProfileController::class, 'update'])->name('profile/update');
    });

    //faq
    Route::get('Ask_Me/{id}', [App\Http\Controllers\User\FAQController::class, 'show'])->name('FAQ/show');
    Route::get('/Ask_Me', [App\Http\Controllers\User\FAQController::class, 'allQA'])->name('/FAQ');

    //contact us 
    Route::get('contact/us', [App\Http\Controllers\User\ContactFormController::class, 'contact_form'])->name('contact/form');
    Route::post('contact-us', [App\Http\Controllers\User\ContactFormController::class, 'store'])->name('contact/store');

    //images
    Route::get('/', [App\Http\Controllers\User\HomePageController::class, 'home'])->name('/main');
    Route::get('/images/{id}', [App\Http\Controllers\User\HomePageController::class, 'show'])->name('/images');

    //Design
    Route::get('/designs', [App\Http\Controllers\User\DesignController::class, 'index'])->name('designs');
    Route::get('/comment/{id}', [App\Http\Controllers\User\DesignController::class, 'show'])->name('comments');

    //comments
    Route::post('/comments', [App\Http\Controllers\User\CommentController::class, 'store'])->name('comment/store');
    // Route::get('comment/Create', [App\Http\Controllers\User\CommentController::class, 'create'])->name('comment/create');
    
});


