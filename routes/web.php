<?php

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
    return view('login');
});

Route::get('/kasir', function () {
    return view('kasir.pesanan');
});

Route::get('/admin/kasir', function () {
    return view('admin.kasir');
});

Route::get('/admin/manager', function () {
    return view('admin.manager');
});
