<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::redirect('/iii', '/');
// Route::view('/', 'welcome')->name('home');
Route::view('/', 'home.index')->name('home');
Route::redirect('/home', '/')->name('home.redirect');

Route::get('/test', TestController::class)->name('test')->middleware('token:secret');

Route::middleware('guest')->group(function () {

    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});


// Route::get('login/{user}/confirmation', [LoginController::class, 'confirmation'])->name('login.confirmation');
// Route::post('login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');

// Route::resource('user', UserController::class);

Route::resource('posts/{post}/comments', CommentController::class);
Route::resource('posts/{post}/comments', CommentController::class)->only(['index', 'show']); //исключить//
Route::resource('posts/{post}/comments', CommentController::class)->except(['index', 'show']); //включить//
// Route::resource('posts/{post}/comments', [CommentController::class, 'comment'])->name('posts.comment');


// Route::resource('posts', PostController::class);
// Route::resource('posts', PostController::class)->only(['index', 'show']);

// Route::post('posts/{post}/likes', [PostController::class, 'delete'])->name('posts.delete');
// Route::put('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');





// Route::fallback(function () {
//     return 'COMEBACK';
// });
