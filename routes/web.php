<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\api\PenjualanController;
use \App\Http\Controllers\api\StockController;

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


Route::get('/api/penjualan', [PenjualanController::class, 'index']);
Route::post('/api/penjualan/store', [PenjualanController::class, 'store']);

Route::get('/api/stock', [StockController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
