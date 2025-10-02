<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route avec paramètre
// Route::get('/kaidy/{id}', function (string $id) {
//     return 'user ' . $id;
// });

// // Route vers UserController@index
// Route::get('/users', [UserController::class, 'index']);

// // Route vers UserController@categories
// Route::get('/categories', [UserController::class, 'categories']);

Route::get('/index', [CategorieController::class, 'index'])->name('index');
Route::post('/store', [CategorieController::class,'store'])->name('store');
Route::get('/liste', [CategorieController::class, 'liste']);
