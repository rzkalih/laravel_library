<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;


Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/buku', function () {
//     return view('books.index');
// });

// Route::get('/buku', [BooksController::class, 'index']);
// Route::get('/category', [CategoryController::class, 'index']);
// Route::get('/member', [MemberController::class, 'index']);
// Route::get('/buku/{id}', [BooksController::class, 'show']);

Route::controller(BooksController::class)->group(function () {
    Route::get('/buku', 'index')->name('books.index');
    Route::get('/buku/create', 'create')->name('books.create');
    Route::post('/buku', 'store')->name('books.store');
    Route::get('/buku/{id}/edit', 'edit')->name('books.edit');
    Route::put('/buku/{id}', 'update')->name('books.update');
    Route::delete('/buku/{id}', 'destroy')->name('books.destroy');
});
