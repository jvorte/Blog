<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommentsController;
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

Route::get('/post{post}',[PostsController::class,'post'])->name('post');



Route::get('/home',[PostsController::class,'front'])->name('home');

Route::any('/input_form',[PostsController::class,'form'])->name('input_form')->middleware('auth');

Route::get('/search',[PostsController::class,'search'])->name('search');

Route::get('/view_post/{post}',[PostsController::class,'post'])->name('view_post');

Route::any('/delete_post/{post}',[PostsController::class,'delete_post'])->name('delete_post')->middleware('auth');

Route::any('/edit_post/{post}',[PostsController::class,'edit_post'])->name('edit_post')->middleware('auth');

Route::any('newcomment/{post}', [CommentsController::class,'new_comment'])->name('newcomment');

Auth::routes();

// Route::any('/posts',[PostsController::class,'index'])->name('posts');

Route::any('/all_posts',[PostsController::class,'index'])->name('all_posts');



