<?php

// 1. Buat direktori sementara di Vercel (karena Vercel itu Read-Only)
$tmpStorage = '/tmp/storage';
$directories = [
    $tmpStorage . '/framework/views',
    $tmpStorage . '/framework/cache',
    $tmpStorage . '/framework/cache/data',
    $tmpStorage . '/framework/sessions',
    $tmpStorage . '/logs',
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// 2. Beri tahu Laravel untuk pakai folder /tmp ini
putenv('APP_STORAGE=' . $tmpStorage);
$_ENV['APP_STORAGE'] = $tmpStorage;

// 3. Meneruskan request ke file public/index.php bawaan Laravel
require __DIR__ . '/../public/index.php';
