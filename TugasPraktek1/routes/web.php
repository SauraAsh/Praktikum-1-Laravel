<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return('Hi! Selamat Datang di Web Laravel');
});

Route::get('/about', function () {
    return('NIS: 24999/2113.063<br>Nama: Chello Arta Sukma Hadinata<br>Kelas: XI RPB');
});

Route::get('/articles/{id}', function ($id) {
    return("Ini adalah halaman Artikel dengan ID:$id");
});