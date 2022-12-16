<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DetailPemesananController;
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

// Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/admin', [UserController::class, 'adminBeranda'])->name('admin');
Route::get('/admin/kasir', [UserController::class, 'adminKasir'])->name('admin.kasir');
Route::get('/admin/manajer', [UserController::class, 'adminManajer'])->name('admin.manajer');
Route::get('/admin/menu', [UserController::class, 'adminMenu'])->name('admin.menu');
// Route::get('/kasir', function () {
//     $data = ['title' => 'kasir'];
//     return view('kasir/pesanan', $data );
// })->name('kasir');
// Route::get('/user/edit', function () {
//     return view('user/edit', ['title' => 'kasir',$user]);
// })->name('user.edit');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/kasir', [UserController::class, 'kasir'])->name('kasir.pemesanan');

Route::get('/manajer', [PemesananController::class, 'index'])->name('manajer');
Route::get('/manajer/report', [PemesananController::class,  'reportBulan'])->name('manajer.reportBulan');
Route::get('/manajer/report-harian', [PemesananController::class,  'reportHarian'])->name('manajer.reportHari');

Route::get('/user/createkasir', [UserController::class, 'createKasir'])->name('user.createKasir');
Route::get('/user/createmanajer', [UserController::class, 'createManajer'])->name('user.createManajer');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/destroy', [UserController::class, 'destroy'])->name('user.destroy');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');

Route::get('/', [UserController::class, 'login'])->name('login');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/password', [UserController::class, 'password'])->name('password');
Route::post('/password', [UserController::class, 'password_action'])->name('password.action');

Route::resource('menu', MenuController::class);
// Route::resource('pemesanan', PemesananController::class);


//route menu
// Route::post('/admin/menu/tambah', [MenuController::class, 'store'])->name('menu.store');

Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/', [PemesananController::class, 'index'])->name('pemesanan.index');
Route::get('/pemesanan/report', [PemesananController::class, 'reportBulan'])->name('pemesanan.reportBulan');
Route::get('/detailpemesanan/{pemesanan}', [DetailPemesananController::class, 'index'])->name('detailpemesanan.detail');
// Route::get('/pemesanan/reportBulan', [PemesananController::class, 'reportBulan'])->name('pemesanan.reportBulan');

