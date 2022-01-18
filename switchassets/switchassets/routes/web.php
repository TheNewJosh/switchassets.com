<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function (){return view('about');})->name('about');
Route::get('/faq', function (){return view('faq');})->name('faq');
Route::get('/cryptocurrency', function (){return view('cryptocurrency');})->name('cryptocurrency');
Route::get('/forex', function (){return view('forex');})->name('forex');
Route::get('/stock', function (){return view('stock');})->name('stock');
Route::get('/realEstate', function (){return view('realEstate');})->name('realEstate');
