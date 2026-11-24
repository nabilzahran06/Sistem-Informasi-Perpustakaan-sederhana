<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;

Route::get('/books', [BookController::class, 'index']);
Route::get('/categories', [BookController::class, 'index']);
Route::get('/members', [BookController::class, 'index']);
