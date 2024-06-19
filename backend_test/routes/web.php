<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('home');
});

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

use App\Http\Controllers\UserController;
 
Route::get('/user/{id}', [UserController::class, 'show']);

//thank you
Route::get('thankyou', [RegisterController::class, 'showThankYou'])->name('thank.you');