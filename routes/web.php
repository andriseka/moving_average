<?php

use App\Http\Controllers\ImportController;
use App\Http\Controllers\PredictController;
use App\Http\Controllers\StockController;
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

Route::get('/import', [ImportController::class, 'index'])->name('import.index');
Route::post('/import/store', [ImportController::class, 'store'])->name('import.store');

Route::get('/saham', [StockController::class, 'index'])->name('saham.index');

