<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PageController;
use App\http\Controllers\HomeController;
use App\http\Controllers\AboutController;
use App\http\Controllers\ArticleController;

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

// PRAKTIKUM 1
// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return '1941720040 | Naufal Yukafi Ridlo';
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID ' . $id;
// });
// PRAKTIKUM 1

// =========================================================

// PRAKTIKUM 2

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// PRAKTIKUM 2



