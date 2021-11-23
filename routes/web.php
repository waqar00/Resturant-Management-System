<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index']);


Route::get('/redirects', [HomeController::class, 'redirects']);

Route::resource('users', AdminController::class);
Route::get('get/ajax', [AdminController::class, 'getUser'])->name('get.ajax.users');

Route::post('reservation', [AdminController::class, 'reservation'])->name('reservation');
Route::get('get/ajax', [AdminController::class, 'getReservation'])->name('get.reservation');

Route::resource('foods', FoodController::class);
Route::get('get', [FoodController::class, 'getFood'])->name('get.foods');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
