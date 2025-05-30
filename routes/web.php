<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/trainers', function () {
    return view('trainers');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');