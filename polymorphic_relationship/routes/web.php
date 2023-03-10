<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
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

Route::get('PostImage/{id}',[UserController::class,'getPostImage']);

Route::get('UserImage/{id}',[UserController::class,'getUserImage']);

Route::get('PostComments/{id}',[CommentController::class,'getAllPostComments']);

Route::get('VideoComments/{id}',[CommentController::class,'getAllVideoComments']);

Route::get('PostTag/{id}',[TagController::class,'getTagByPost']);

Route::get('TagPost/{id}',[TagController::class,'getPostByTag']);

Route::get('VideoTag/{id}',[TagController::class,'getTagByVideo']);

Route::get('TagVideo/{id}',[TagController::class,'getVideoByTag']);
