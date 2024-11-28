<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users');
})->name('users');

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/kategori-barang', function () {
    return view('kategori_barang');
})->name('kategori-barang');

Route::get('/barang', function () {
    return view('barang');
})->name('barang');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');