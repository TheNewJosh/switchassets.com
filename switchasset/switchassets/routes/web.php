<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserDepositController;
use App\Http\Controllers\User\UserReferralController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserInvestmentController;
use App\Http\Controllers\User\UserWithdrawalController;
use App\Http\Controllers\User\UserTransactionController;

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
Route::get('/strategy', function (){return view('strategy');})->name('strategy');
Route::get('/terms', function (){return view('terms');})->name('terms');

Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

Route::get('/transaction', [UserTransactionController::class, 'index'])->name('transaction');

Route::get('/deposit', [UserDepositController::class, 'index'])->name('deposit');
Route::get('/depositHistory', [UserDepositController::class, 'history'])->name('depositHistory');

Route::get('/investmentPackages', [UserInvestmentController::class, 'index'])->name('investmentPackages');
Route::get('/investment/{investment_id}/invest', [UserInvestmentController::class, 'investment'])->name('investment');
Route::get('/investmentHistory', [UserInvestmentController::class, 'history'])->name('investmentHistory');

Route::get('/withdrawal', [UserWithdrawalController::class, 'index'])->name('withdrawal');
Route::get('/withdrawalHistory', [UserWithdrawalController::class, 'history'])->name('withdrawalHistory');

Route::get('/referral', [UserReferralController::class, 'index'])->name('referral');
Route::get('/referralBonus', [UserReferralController::class, 'bonus'])->name('referralBonus');
