<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PemesananController;
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

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/admin', [UserController::class, 'adminKasir'])->name('admin');
Route::get('/admin/kasir', [UserController::class, 'adminKasir'])->name('admin.kasir');
Route::get('/admin/manajer', [UserController::class, 'adminManajer'])->name('admin.manajer');
Route::get('/admin/menu', [UserController::class, 'adminMenu'])->name('admin.menu');
Route::get('/kasir', function () {
    $data = ['title' => 'kasir'];
    return view('kasir/pesanan', $data );
})->name('kasir');
// Route::get('/user/edit', function () {
//     return view('user/edit', ['title' => 'kasir',$user]);
// })->name('user.edit');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/kasir', [PemesananController::class, 'pemesanan'])->name('kasir.pemesanan');
Route::get('/manajer', [UserController::class, 'manajer'])->name('user.manajer');
Route::get('/user/createkasir', [UserController::class, 'createKasir'])->name('user.createKasir');
Route::get('/user/createmanajer', [UserController::class, 'createManajer'])->name('user.createManajer');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
// Route::get('/user/destroy', [UserController::class, 'destroy'])->name('user.destroy');
// Route::post('/user/destroy', [UserController::class, 'destroy'])->name('user.destroy');
Route::delete('/user/destroy', [UserController::class, 'destroy'])->name('user.destroy');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');
Route::post('/user/edit', [UserController::class, 'update'])->name('user.update');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');
Route::get('/password', [UserController::class, 'password'])->name('password');
Route::post('/password', [UserController::class, 'password_action'])->name('password.action');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::resource('menu', MenuController::class);
Route::resource('pemesanan', PemesananController::class);


// Route::get('/kasir', function () {
//     return view('kasir.pesanan');
// });

// Route::get('/admin/kasir', function () {
//     return view('admin.kasir',["page" => "kasir"]);
// });

// Route::get('/admin/manager', function () {
//     return view('admin.manager',["page" => "manager"]);
// });

// Route::get('/admin/menu', function () {
//     return view('admin.menu',["page" => "menu"]);
// });
// Route::resource('user', UserController::class);

