<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TopsectionController;
use App\Http\Controllers\AnhController;
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

/*Route::resource('/index',MailController::class);*/
Route::resource('/',AnhController::class);
Route::get('/about', [App\Http\Controllers\AnhController::class, 'about'])->name('about');
Route::post('/store', [App\Http\Controllers\ContactController::class, 'store'])->name('store');
Route::get('/send', [App\Http\Controllers\ContactController::class, 'send'])->name('send');
Route::resource('topsection', TopsectionController::class);
