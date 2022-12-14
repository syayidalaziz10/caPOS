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
Route::get('/admin', function () {
    return view('admin', ['title' => 'admin']);
})->name('admin');
Route::get('/kasir', function () {
    return view('kasir', ['title' => 'kasir']);
})->name('kasir');
// Route::get('/user/edit', function () {
//     return view('user/edit', ['title' => 'kasir',$user]);
// })->name('user.edit');

Route::get('/register', [UserController::class, 'register'])->name('register');
// Route::get('/kasir', [UserController::class, 'kasir'])->name('user.kasir');
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
// Route::resource('user', UserController::class);