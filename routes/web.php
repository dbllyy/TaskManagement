<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return 'Welcome Admin!';
})->middleware('role:admin');

Route::get('/teknisi', function () {
    return 'Welcome Teknisi!';
})->middleware('role:teknisi');
