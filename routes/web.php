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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

Route::post('/newsletter-anmeldung',[\App\Http\Controllers\HomeController::class,'newsletter']);

Route::get('/login',[\App\Http\Controllers\Auth\AuthController::class,'login']);

Route::get('/registration',[\App\Http\Controllers\Auth\AuthController::class,'registration']);

Route::post('/registration-verification',[\App\Http\Controllers\Auth\AuthController::class,'registration_verification']);

Route::post('/login-verification',[\App\Http\Controllers\Auth\AuthController::class,'login_verification']);

Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'showProfile']);

Route::get('/sign-out',[\App\Http\Controllers\Auth\AuthController::class,'sign_out']);
