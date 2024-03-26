<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/posts',[PostsController::class,'index'])->name('posts');

Route::get('/',[PostsController::class,'front'])->name('/');

Route::any('/input_form',[PostsController::class,'form'])->name('input_form');

Route::get('/search',[PostsController::class,'search'])->name('search');

Route::get('/view_post/{post}',[PostsController::class,'post'])->name('view_post');

Route::any('/delete_post/{post}',[PostsController::class,'delete_post'])->name('delete_post');

Route::any('/edit_post/{post}',[PostsController::class,'edit_post'])->name('edit_post');