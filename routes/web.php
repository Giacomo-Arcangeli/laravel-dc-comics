<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;
use App\Models\Comic;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


// Route::get('/', [ComicController::class, 'index'])->name('comics.index');
// Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

Route::resource('comics', ComicController::class);
