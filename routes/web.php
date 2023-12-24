<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('app/')->group(function () {

    Route::get('posts/index', [PostController::class, 'listPosts'])->name('posts.index');
    Route::get('posts/new', [PostController::class, 'createPost'])->name('posts.create');
    Route::get('posts/{date}/{post}/show', [PostController::class, 'showPost'])->name('posts.show');
    Route::post('posts/store', [PostController::class, 'storePost'])->name('posts.store');
    Route::get('posts/{post}/edit', [PostController::class, 'editPost'])->name('posts.edit');
    Route::put('posts/{post}/update', [PostController::class, 'updatePost'])->name('posts.update');
    Route::delete('posts/{post}/delete', [PostController::class, 'deletePost'])->name('posts.delete');
});
