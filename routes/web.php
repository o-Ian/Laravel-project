<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

Route::get('produtos', [CategoryController::class, 'index']);
Route::get('produtos/{slug}', [CategoryController::class, 'show']);

Route::get('blog', BlogController::class);

Route::view('sobre', 'about/index');

Route::get('contato', [ContactController::class, 'index']);
Route::post('contato', [ContactController::class, 'form']);