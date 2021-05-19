<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\A1Controller;

Route::resource('/a1', A1Controller::class);

use App\Http\Controllers\A2Controller;

Route::resource('/a2', A2Controller::class);

use App\Http\Controllers\B1Controller;

Route::resource('/b1', B1Controller::class);

use App\Http\Controllers\B2Controller;

Route::resource('/b2', B2Controller::class);
