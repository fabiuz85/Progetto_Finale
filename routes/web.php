<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
// Route::get('/insert-add', [PublicController::class, 'insert_add'])->middleware('auth')->name('insert_add');
Route::get('/add/create', [AddController::class, 'create'])->middleware('auth')->name('add.create');

Route::get('/add/index', [AddController::class, 'index'])->name('add.index');
Route::get('/add/index/{sortedCategory}',[AddController::class,'categoryIndex'])->name('adds.category');
Route::get('/add/show/{add}',[AddController::class,'show'])->name('add.show');
