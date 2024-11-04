<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserDetectionController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\WelcomeController;
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

Route::resource("/", WelcomeController::class);
Route::get("/logout", [LogoutController::class, 'index']);
Route::get('/user_home', [UserHomeController::class, 'index']);
Route::resource("/user_detection", UserDetectionController::class);
