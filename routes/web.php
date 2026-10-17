<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyProfileController;

Route::get('/', [CompanyProfileController::class, 'index'])
    ->name('home');

Route::get('/tentang', [CompanyProfileController::class, 'tentang'])
    ->name('tentang');

Route::get('/layanan', [CompanyProfileController::class, 'layanan'])
    ->name('layanan');

Route::get('/kontak', [CompanyProfileController::class, 'kontak'])
    ->name('kontak');
