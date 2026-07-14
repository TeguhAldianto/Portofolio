<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'pages.about');
Route::view('/experience', 'pages.experience');
Route::view('/skills', 'pages.skills');
Route::view('/projects', 'pages.projects');
Route::view('/contact', 'pages.contact');
