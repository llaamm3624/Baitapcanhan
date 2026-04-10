<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SinhVienController;

use App\Http\Controllers\HocPhanController;

Route::get('/hocphan', [HocPhanController::class, 'index'])->name('hocphan.index');

Route::get('/sinhvien', [SinhVienController::class, 'index'])->name('sinhvien.index');

Route::get('/sinhvien/create', [SinhVienController::class, 'create'])->name('sinhvien.create');
Route::post('/sinhvien/store', [SinhVienController::class, 'store'])->name('sinhvien.store');

Route::get('/sinhvien/edit/{id}', [SinhVienController::class, 'edit'])->name('sinhvien.edit');
Route::post('/sinhvien/update/{id}', [SinhVienController::class, 'update'])->name('sinhvien.update');

Route::get('/sinhvien/delete/{id}', [SinhVienController::class, 'delete'])->name('sinhvien.delete');

Route::get('/', function () {
    return view('welcome');

});

