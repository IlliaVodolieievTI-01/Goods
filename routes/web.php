<?php

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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => '/categories'], function () {
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
    Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('category.delete');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
    Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
});

Route::group(['prefix' => '/tags'], function () {
    Route::get('/', \App\Http\Controllers\Tag\IndexController::class)->name('tag.index');
    Route::get('/create', \App\Http\Controllers\Tag\CreateController::class)->name('tag.create');
    Route::delete('/{tag}', \App\Http\Controllers\Tag\DeleteController::class)->name('tag.delete');
    Route::get('/{tag}/edit', \App\Http\Controllers\Tag\EditController::class)->name('tag.edit');
    Route::get('/{tag}', \App\Http\Controllers\Tag\ShowController::class)->name('tag.show');
    Route::post('/', \App\Http\Controllers\Tag\StoreController::class)->name('tag.store');
    Route::patch('/{tag}', \App\Http\Controllers\Tag\UpdateController::class)->name('tag.update');
});

Route::group(['prefix' => '/colors'], function () {
    Route::get('/', \App\Http\Controllers\Color\IndexController::class)->name('color.index');
    Route::get('/create', \App\Http\Controllers\Color\CreateController::class)->name('color.create');
    Route::delete('/{color}', \App\Http\Controllers\Color\DeleteController::class)->name('color.delete');
    Route::get('/{color}/edit', \App\Http\Controllers\Color\EditController::class)->name('color.edit');
    Route::get('/{color}', \App\Http\Controllers\Color\ShowController::class)->name('color.show');
    Route::post('/', \App\Http\Controllers\Color\StoreController::class)->name('color.store');
    Route::patch('/{color}', \App\Http\Controllers\Color\UpdateController::class)->name('color.update');
});

Route::group(['prefix' => '/users'], function () {
    Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create', \App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::delete('/{user}', \App\Http\Controllers\User\DeleteController::class)->name('user.delete');
    Route::get('/{user}/edit', \App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::get('/{user}', \App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::post('/', \App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::patch('/{user}', \App\Http\Controllers\User\UpdateController::class)->name('user.update');
});
