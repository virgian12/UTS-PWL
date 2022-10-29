<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reviews;
use App\Http\Controllers\ReviewsController;

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

Route::get('/review',[ReviewsController::class, 'Barang'])->name('barang.view');
Route::get('/detail/{id}',[ReviewsController::class, 'Detail'])->name('detail.view');
