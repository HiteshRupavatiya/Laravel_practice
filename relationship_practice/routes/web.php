<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PhoneController;
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

Route::get('findUser/{id}', [PhoneController::class, 'getUserOfPhone'])->name('phone.user');

Route::get('findPhone/{id}', [PhoneController::class, 'getPhoneOfUser'])->name('user.phone');

Route::get('findPost/{id}',[CommentController::class,'getPostOfComment'])->name('comment.post');

Route::get('findComments/{id}',[CommentController::class,'getCommentOfPost'])->name('post.comment');
