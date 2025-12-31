<?php

use Illuminate\Support\Facades\Route;

// Ini ramah Intelephense (tanpa helper view)
Route::view('/', 'portofolio');

// Atau jika ingin pakai helper:
# use function view;
# Route::get('/', fn () => view('portofolio'));
