<?php

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

Route::view('/', 'pages.home.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.landingpage');
Route::view('/about', 'pages.about.index')->name('about.landingpage');

Route::view('sahrudin', 'sahrudin.index');
Route::view('afrida', 'afrida.index');
Route::view('sheila', 'sheila.index');

Route::view('homepage', 'landingpage.home');