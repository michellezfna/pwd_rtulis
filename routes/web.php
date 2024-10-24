<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get("register", [AuthController::class, "showRegister"])->name("register");
Route::post("register", [AuthController::class, "register"])->name("register.submit");

