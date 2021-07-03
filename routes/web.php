<?php

use App\Http\Controllers\TimesController;
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
Route::redirect('/', '/times');

Route::get('times', [TimesController::class, 'index'])->name("views.times.index");
Route::get('times/form', [TimesController::class, 'create'])->name("views.times.create");
Route::post('times/form', [TimesController::class, 'store'])->name("views.times.store");


