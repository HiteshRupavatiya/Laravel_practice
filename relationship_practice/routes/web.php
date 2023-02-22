<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
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

Route::get('findPhoneUser/{id}', [PhoneController::class, 'getPhoneOfUser'])->name('user.phone');

Route::get('findUserPhone/{id}', [PhoneController::class, 'getUserOfPhone'])->name('phone.user');

Route::get('findPost/{id}', [CommentController::class, 'getPostOfComment'])->name('comment.post');

Route::get('findComments/{id}', [CommentController::class, 'getCommentOfPost'])->name('post.comment');

Route::get('findAllOwner/{id}', [MechanicController::class, 'getAllOwnerOfCar'])->name('cars.owner');

Route::get('findAllMechanic/{id}', [MechanicController::class, 'getAllMechanicOfCar'])->name('cars.mechanic');

Route::get('findEnvironments/{id}', [ProjectController::class, 'getEnvironments'])->name('project.deployments');

Route::get('findProject/{id}', [ProjectController::class, 'getProject']);

Route::get('findDeployments/{id}', [ProjectController::class, 'getDeployments']);

Route::get('getRoles/{id}', [RoleController::class, 'getRoles']);
