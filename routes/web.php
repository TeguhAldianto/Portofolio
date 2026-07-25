<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/experience', 'experience');
Route::view('/skills', 'skills');
Route::view('/projects', 'projects');
Route::view('/certificates', 'certificates');
Route::view('/publications', 'publications');
Route::view('/contact', 'contact');
Route::post('/contact', [ContactController::class, 'send']);
