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

Route::get('/', HomeController::class)->name('site.home');

Route::get('produtos', [CategoryController::class, 'index'])->name('site.products');
Route::get('produtos/{category}', [CategoryController::class, 'show'])->name('site.products.category');

Route::get('blog', BlogController::class)->name('site.blog');

Route::view('sobre', 'about/index')->name('site.about');

Route::get('contato', [ContactController::class, 'index'])->name('site.contact');
Route::post('contato', [ContactController::class, 'form'])->name('site.contact.form');
