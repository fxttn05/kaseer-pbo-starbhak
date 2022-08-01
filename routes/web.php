<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;

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
    return view('home', ["title" => "Home"]);
});


Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/tambahmenu', [MenuController::class, 'create'])->name('tambahmenu');
Route::post('/insertmenu', [MenuController::class, 'store'])->name('insertmenu');

Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('Transaksi');
Route::post('/inserttransaksi', [TransaksiController::class, 'store'])->name('inserttransaksi');

Route::get('/user', [UserController::class, 'user'])->name('User Page');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
