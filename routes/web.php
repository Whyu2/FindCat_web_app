<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;
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

Route::get('/home', [PageController::class, 'index'])->name('index');
Route::get('/detail/{id}', [PageController::class, 'show'])->name('show');
Route::get('/tambah_post/', [PostsController::class, 'index'])->name('tambah_post');
