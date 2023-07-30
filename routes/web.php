<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/forecasting', [App\Http\Controllers\ForecastingController::class, 'index'])->name('forecasting')->middleware('userAkses:2');
    Route::get('/history', [App\Http\Controllers\PendataanController::class, 'create'])->name('history');
    Route::get('/news', [App\Http\Controllers\newscontroller::class, 'index'])->name('news');
    Route::get('/pendataan', [App\Http\Controllers\PendataanController::class, 'index'])->name('pendataan')->middleware('userAkses:1');
    Route::post('/pendataan', [App\Http\Controllers\PendataanController::class, 'store'])->name('pendataan.store')->middleware('userAkses:1');
});
