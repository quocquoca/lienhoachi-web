<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cau-chuyen-tra-la-sen-hong-sam', function () {
    return view('story-tra-la-sen-hong-sam');
});

Route::get('/quy-trinh-san-xuat', function () {
    return view('quy-trinh-san-xuat');
});
