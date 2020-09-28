<?php

use App\Http\Controllers\HidanganController;
use App\Http\Controllers\KategoriController;
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
    return view('home');
});

Route::get('/test/{name?}', function ($name = "Jhon") {
    return view('test', ["name" => $name]);
});

Route::get("auth/daftar", function () {
    return view("daftar");
});

Route::get("auth/login", function () {
    return view("login");
});

Route::get("user/konfirmasi", function () {
    return view("konfirmasi");
});

Route::get("user/profil", function () {
    return view("profil");
});

Route::get("admin/mempelai", function () {
    return view("edit-mempelai");
});

Route::get("mempelai/lokasi", function () {
    return view("lokasi");
});

Route::get("mempelai/laporan", function () {
    return view("laporan");
});

Route::resource("mempelai/hidangan", HidanganController::class);
Route::resource("mempelai/kategori", KategoriController::class);
