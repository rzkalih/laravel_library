<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/buku', function () {
//     return view('books.index');
// });

Route::get('/buku', [BooksController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/member', [MemberController::class, 'index']);
