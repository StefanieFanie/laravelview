<?php

use Illuminate\Support\Facades\Route;

// redirect ke view welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function () {
    return view('dosen');
});
// Cara running : http://127.0.0.1:8000/dosen

Route::get('/dosen/index', function () { // ini adalah URL nya
    return view('dosen.index');
});
// Cara running : http://127.0.0.1:8000/dosen/index

// Menyertakan data dalam bentuk array asosiatif (tidak ada index, namun ada key dan value)
Route::get('/fakultas', function () {
    // return view('fakultas.index',["ilkom" => "Fakultas ILKOM UMDP"]);

    // return view('fakultas.index',
    // ["fakultas" => ["Fakultas ILKOM UMDP","Fakultas Ekonomi UMDP"]]);

    $fakultas = ["Fakultas ILKOM UMDP","Fakultas Ekonomi UMDP"];
    return view('fakultas.index',compact('fakultas'));
});
