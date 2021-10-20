<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use Illuminate\Database\Connectors\PostgresConnector;

Route::prefix('admin')->group(function () {

    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');
});
