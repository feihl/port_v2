<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificateController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Certificate routes
Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates.index');