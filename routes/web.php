<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Illuminate\Database\Connectors\PostgresConnector;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/iii', '/');

Route::get('/test', TestController::class);

Route::resource('user', UserController::class);

Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
Route::post('posts/{post}/comment', [PostController::class, 'comment'])->name('posts.comment');

// Route::post('posts/{post}/likes', [PostController::class, 'delete'])->name('posts.delete');
// Route::put('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');





Route::fallback(function () {
    return 'COMEBACK';
});
