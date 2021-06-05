<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0213;
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

// Route::get('/', function () {
//     return view('home0213');
// });
Route::get('/', [Controller0213::class,'home']);
Route::get('barang0213', [Controller0213::class,'barang']);
Route::get('pelanggan0213', [Controller0213::class,'pelanggan']);
Route::get('pelanggan0213/cari', [Controller0213::class,'cari']);
Route::get('transaksi0213', [Controller0213::class,'transaksi']);
