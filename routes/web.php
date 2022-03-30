<?php

use App\Http\Controllers\ReservationController;
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

Route::get('/crear-reservasion', [ReservationController::class, 'create'])->name('create-reservation');
Route::post('/guardar-reservacion', [ReservationController::class, 'store'])->name('save-reservation');
Route::post('/obtener-cliente', [ReservationController::class, 'getDataCustomer'])->name('get-customer');
Route::get('/guardado-satisfactorio', function () {
    return view('reservation.success');
})->name('success-save');
