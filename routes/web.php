<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PortofolioController;

Route::get('/', [PortofolioController::class, 'index'])->name('home');
Route::get('/about', [PortofolioController::class, 'about'])->name('about');
Route::get('/projects', [PortofolioController::class, 'projects'])->name('projects');
// Route::get('/contact', [PortofolioController::class, 'contact'])->name('contact');


// Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
use App\Http\Controllers\ContactController;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
