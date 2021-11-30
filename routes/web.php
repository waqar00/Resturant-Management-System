<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;

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

Route::get('order', [AdminController::class, 'order'])->name('order');
Route::get('getorders', [AdminController::class, 'getOrder'])->name('getorders');


Route::resource('reservations', ReservationController::class);
Route::get('getRservation', [ReservationController::class, 'getReservation'])->name('getRservation');

Route::resource('foods', FoodController::class);
Route::get('get', [FoodController::class, 'getFood'])->name('get.foods');

Route::resource('chefs', ChefController::class);
Route::get('getchefs', [ChefController::class, 'getChef'])->name('getchefs');

Route::post('addcart/{id}', [HomeController::class, 'addToCart']);
Route::get('showCart/{id}', [HomeController::class, 'showCart']);
Route::get('remove/{id}', [HomeController::class, 'remove']);
Route::post('orderConfirm', [HomeController::class, 'orderConfirm']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
