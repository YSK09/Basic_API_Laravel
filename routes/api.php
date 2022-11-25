<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\AuthenticationController;




Route::get('/posts',[PostController::class,'index'])->middleware(['auth:sanctum']);
Route::get('/posts/{id}',[PostController::class,'show'])->middleware(['auth:sanctum']);
Route::get('/posts2/{id}',[PostController::class,'show2']);

Route::post('/login', [AuthenticationController::class,'login']);
