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


Route::post('/save_post',[PostsController::class,'save_post'])->name('save_post');

Route::get('/index/{id}',[PostsController::class,'index'])->name('index');
Route::get('/show_add',[PostsController::class,'show_add'])->name('show_add');
Route::get('/delete/{id}', [PostsController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('edit');
