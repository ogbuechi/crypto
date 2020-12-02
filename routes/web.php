<?php

use App\Http\Controllers\DepositsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/fags', [HomeController::class, 'fags'])->name('fags');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/options', [HomeController::class, 'options'])->name('options');
Route::get('/choosing-trades', [HomeController::class, 'trades'])->name('trades');
Route::get('/economic-calender', [HomeController::class, 'calender'])->name('calender');
Route::get('/trader-bonuses', [HomeController::class, 'bonus'])->name('bonus');


Auth::routes();

Route::get('/deposit/{id}/purchase', [DepositsController::class, 'purchase'])->name('deposit.purchase')->middleware('auth');


Route::resources([
    'deposit' => DepositsController::class,
]);

//Route::get('/deposit/create', [DepositsController::class, 'depositFund'])->name('deposit.fund');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

include('backend.php');
include('admin.php');

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
