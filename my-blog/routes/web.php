<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);

Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);

Route::get('/blog/create/post',[\App\Http\Controllers\BlogPostController::class, 'create']);
Route::get('/blog/{blogPost}/edit',[\App\Http\Controllers\BlogPostController::class, 'edit']);
Route::post('/new/blog', [\App\Http\Controllers\BlogPostController::class, 'store'])->name('saveBlog');
Route::put('/update/blog', [\App\Http\Controllers\BlogPostController::class, 'update'])->name('updateBlog');
Route::get('/blog/delete', [\App\Http\Controllers\BlogPostController::class, 'destroy'])->name('deleteBlog');


