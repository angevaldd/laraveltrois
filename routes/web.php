<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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



 Route::get('/', [PostController::class, 'index'])->name('posts.index');
 Route::resource("posts", PostController::class)->except('index')->middleware('auth');
 Route::get('/login', [PostController::class, 'login'])->name('login');
 Route::get('/logout', [PostController::class, 'logout'])->name('logout');
 Route::post('/login', [PostController::class, 'handleLogin']);

Route::get('/', function () {
    return view('welcome');
});
