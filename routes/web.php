<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User1Controller;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\Detail_PemesananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;


// use App\Http\Controllers\OrderController;



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

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


//admin all route
Route::controller(AdminController::class)->group(function(){
Route::get('/admin/logout','destroy')->name('admin.logout');
Route::get('/admin/profile','profile')->name('admin.profile');
Route::get('/edit/profile','EditProfile')->name('edit.profile');
Route::post('/store/profile','StoreProfile')->name('store.profile');
Route::get('/change/password','ChangePassword')->name('change.password');
Route::post('/update/password','UpdatePassword')->name('update.password');

//Crud user
Route::resource('user', UserController::class);
Route::resource('user1', User1Controller::class);
Route::resource('pemesanan', PemesananController::class);
Route::resource('detail_pemesanan', Detail_PemesananController::class);
Route::resource('transaksi', TransaksiController::class);

//Crud laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporan/cetakpdf', [LaporanController::class, 'cetak_pdf'] )->name('laporan.cetak_pdf');

// Route::get('/laporan/print_pdf', [LaporanController::class, 'print_pdf']);







});
