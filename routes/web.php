<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Hacky way to get auto-navigation working in the frontend
Route::prefix('')->name('demos.')->group(function () {
 Route::view('/scrolly-telling', 'scrolly-telling')->name('scrolly-telling');
 Route::view('/scroll-gutter', 'scroll-gutter')->name('scroll-gutter');
 Route::view('/css-carousel', 'css-carousel')->name('css-carousel');
 Route::view('/marquee', 'marquee')->name('marquee');
});
