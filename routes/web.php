<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/page/{id}', [HomeController::class, 'page']);
Route::get('contact-us', [ContactUsController::class, 'index']);
Route::post('contact-us/sendmessage', [ContactUsController::class, 'sendMessage']);
