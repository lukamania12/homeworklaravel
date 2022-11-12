<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PostsController::class, 'welcome'])->name('posts.main');

Route::get('posts', [PostsController::class, 'list'])->name('posts.list');

Route::get('posts/cud/{post?}', [PostsController::class, 'createorupdate'])->name('posts.edit');

Route::get('posts/{id}', [PostsController::class, 'post'])->name('posts.post');

Route::get('posts/delete/{post}', [PostsController::class, 'delete'])->name('posts.delete');




