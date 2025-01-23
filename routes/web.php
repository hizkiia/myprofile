<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PortofolioController;

Route::get('/', [PortofolioController::class, 'index'])->name('home');
Route::get('/about', [PortofolioController::class, 'about'])->name('about');
Route::get('/projects', [PortofolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortofolioController::class, 'contact'])->name('contact');
