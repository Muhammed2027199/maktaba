<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return redirect()->route('books.index');
// });
Route::group([], function () {

    Route::get('/', [BookController::class, 'index'])
        ->name('books.index');

    Route::get('/create', [BookController::class, 'create'])
        ->name('books.create');

    Route::post('/', [BookController::class, 'store'])
        ->name('books.store');

    Route::get('/{book}', [BookController::class, 'show'])
        ->name('books.show');

    Route::get('/{book}/edit', [BookController::class, 'edit'])
        ->name('books.edit');

    Route::put('/{book}', [BookController::class, 'update'])
        ->name('books.update');

    Route::delete('/{book}', [BookController::class, 'destroy'])
        ->name('books.destroy');

});

Route::resource('books', BookController::class);
