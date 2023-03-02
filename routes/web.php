<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopsectionController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CareerController;
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


Route::get('/', [App\Http\Controllers\AnhController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\AnhController::class, 'about'])->name('about');
Route::post('/store', [App\Http\Controllers\ContactController::class, 'store'])->name('store');
Route::get('/send', [App\Http\Controllers\ContactController::class, 'send'])->name('send');
Route::resource('topsection', TopsectionController::class);
Route::resource('features', FeatureController::class);
Route::resource('distributor', DistributorController::class);
Route::resource('project', ProjectController::class);
Route::resource('event', EventController::class);
Route::resource('career', CareerController::class);
