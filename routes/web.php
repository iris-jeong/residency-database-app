<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\NewResidentController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RunReportController;

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

Route::get('/', [SearchController::class, 'index'])->name('search.index');
Route::get('/search', [SearchController::class, 'index'])->name('search.index');

Route::get('/search/testreport', [RunReportController::class, 'test'])->name('report.test');
Route::get('/search/demographicreport', [RunReportController::class, 'demographic'])->name('report.demographic');
Route::get('/search/licensereport', [RunReportController::class, 'license'])->name('report.license');

Route::get('/broadcast', [BroadcastController::class, 'index'])->name('broadcast.index');
Route::get('/new', [NewResidentController::class, 'index'])->name('new.index');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
