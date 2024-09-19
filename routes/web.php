<?php

use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JurusanController::class, 'index']);
Route::get('/admin', function () {
    return view('/admin/index', ['status'=>'']);
});
Route::resource('/siswa', \App\Http\Controllers\SiswaController::class);
Route::resource('/jurusan', \App\Http\Controllers\JurusanController::class);
