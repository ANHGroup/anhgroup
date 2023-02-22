<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TopsectionController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/index',MailController::class);
Route::get('/', [App\Http\Controllers\AnhController::class, 'index'])->name('index');
Route::post('/store', [App\Http\Controllers\ContactController::class, 'store'])->name('store');
Route::get('/send', [App\Http\Controllers\ContactController::class, 'send'])->name('send');
Route::resource('topsection', TopsectionController::class);
