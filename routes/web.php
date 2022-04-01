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

Route::resource('/', 'App\Http\Controllers\authController');
Route::resource('register', 'App\Http\Controllers\registerController');
Route::resource('admin', 'App\Http\Controllers\adminController');
Route::resource('dashboard', 'App\Http\Controllers\dashboardController');
Route::resource('adminDashboard', 'App\Http\Controllers\adminDashBoardController');
Route::resource('withdraw', 'App\Http\Controllers\withdrawController');
Route::resource('transfer', 'App\Http\Controllers\transferController');
Route::resource('deposite', 'App\Http\Controllers\depositeController');
Route::resource('history', 'App\Http\Controllers\historyController');
// Route::get('/', function () {
//     return view('layout.app');
// });
