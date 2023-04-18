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

Route::get('/search/testreport', [SearchController::class, 'test'])->name('search.test');
Route::get('/search/demographicreport', [SearchController::class, 'demographic'])->name('search.demographic');
Route::get('/search/licensereport', [SearchController::class, 'license'])->name('search.license');
Route::get('/search', [SearchController::class, 'filteredSearch'])->name('search.filteredSearch');

Route::get('/broadcast', [BroadcastController::class, 'index'])->name('broadcast.index');
Route::get('/new', [NewResidentController::class, 'index'])->name('new.index');

Route::get('/settings', [SettingsController::class, 'showAdmins'])->name('settings.admins');
Route::get('/settings/admins', [SettingsController::class, 'showAdmins'])->name('settings.admins');
Route::post('/settings/admins', [SettingsController::class, 'createAdmin'])->name('settings.createAdmin');
Route::delete('/settings/admins', [SettingsController::class, 'removeAdmin'])->name('settings.removeAdmin');
Route::get('/settings/requirements', [SettingsController::class, 'showRequirements'])->name('settings.requirements');
Route::post('/settings/requirements', [SettingsController::class, 'createRequirement'])->name('settings.createRequirement');
Route::delete('/settings/requirements/{id}/delete', [SettingsController::class, 'deleteRequirement'])->name('settings.deleteRequirement');
Route::patch('/settings/requirements/{id}/edit', [SettingsController::class, 'updateRequirement'])->name('settings.updateRequirement');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
