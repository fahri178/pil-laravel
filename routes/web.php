<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('tabel', function () {
   return view('pertemuan5/tabel');
});
/Route::get('home', function () {
    
    return view('uts/home');
});
Route::get('produk', function () {
    
    return view('uts/produk');
});*/
Route::resource('mahasiswa',mahasiswaController::class);
