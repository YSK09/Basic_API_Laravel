<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;




Route::get('/posts',[PostController::class,'index'])->middleware(['auth:sanctum']);
Route::get('/posts/{id}',[PostController::class,'show'])->middleware(['auth:sanctum']);
Route::get('/posts2/{id}',[PostController::class,'show2']);
