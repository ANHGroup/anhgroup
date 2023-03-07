<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TopsectionController;
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

Route::get('/', [App\Http\Controllers\AnhController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\AnhController::class, 'about'])->name('about');
Route::post('/store', [App\Http\Controllers\ContactController::class, 'store'])->name('store');
Route::get('/send', [App\Http\Controllers\ContactController::class, 'send'])->name('send');
// Distributor Start
Route::get('/create_distributor', [App\Http\Controllers\DistributorController::class, 'create_distributor']);
Route::post('/store_distributor', [App\Http\Controllers\DistributorController::class, 'store']);
Route::get('/distributor_list', [App\Http\Controllers\DistributorController::class, 'distributor_list']);
Route::get('/delete_distributor/{id}', [App\Http\Controllers\DistributorController::class, 'delete_distributor']);
Route::get('/edit_distributor/{id}', [App\Http\Controllers\DistributorController::class, 'edit']);
Route::post('/update_distributor/{id}', [App\Http\Controllers\DistributorController::class, 'update']);
// Distributor End
//Career Start
Route::get('/create_career', [App\Http\Controllers\CareerController::class, 'create_career']);
Route::post('/store_career', [App\Http\Controllers\CareerController::class, 'store']);
//Career End
Route::resource('topsection', TopsectionController::class);
//Route::post('/store_distributor', 'DistributorController@store');
Route::resource('features', FeatureController::class);
// Route::resource('distributor', DistributorController::class);

Route::resource('project', ProjectController::class);
Route::resource('event', EventController::class);
Route::resource('career', CareerController::class);

// Applicant Start
Route::post('/store_applicant', [App\Http\Controllers\ApplicantController::class, 'store']);
// Applicant End
