<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
	return view('index');
});

Route::get('/admin', [PagesController::class, 'adminPage']);

Route::get('/driver/driver', [PagesController::class, 'driverPage']);

Route::get('/driver/login', [PagesController::class, 'driverPage']);

Route::get('/driver/signup', [PagesController::class, 'driverPage']);



Route::get('/passenger/login', [PagesController::class, 'passengerPage']);