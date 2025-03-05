<?php

use Illuminate\Support\Facades\Route;

// หน้าแรก
Route::get('/', function () {
    return view('welcome');
});

// หน้าเกี่ยวกับเรา
Route::get('about', function () {
    return 'About us';
});

// หน้าติดต่อเรา
Route::get('contact', function () {
    return 'Contact us';
});

