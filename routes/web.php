<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
Route::get('/hikmah', [CabangController::class, 'index'])->name('cabang');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::get('/kelompok4', [TeamController::class, 'index'])->name('team');
