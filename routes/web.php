<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Hacky way to get auto-navigation working in the frontend
Route::prefix('')->name('demos.')->group(function () {
 Route::view('/view-transitions', 'view-transitions.page-1')->name('view-transitions');
 Route::view('/view-transitions/post', 'view-transitions.post-1')->name('view-transitions-(post)');
 Route::view('/view-transitions/gallery', 'view-transitions.gallery.index')->name('view-transitions-(gallery)');
 Route::view('/scrolly-telling', 'scrolly-telling')->name('scrolly-telling');
 Route::view('/scroll-gutter', 'scroll-gutter')->name('scroll-gutter');
 Route::view('/css-carousel', 'css-carousel')->name('css-carousel');
 Route::view('/marquee', 'marquee')->name('marquee');
 Route::view('/subgrid', 'subgrid')->name('subgrid');
 Route::get('/subgrid-cards', function () {
  return view('subgrid-cards',  ['cards' => [
   [
    'title' => 'Card #1',
    'body' => "This is the card body copy — it’s much smaller. Let’s make this one a little bit longer,
            maybe four lines of text.",
    'color' => 'blue'
   ],
   [
    'title' => 'This title is a bit longer than the others',
    'body' => "Here's another card body copy, and as you can see this one is really stretching the layout because it is, well, quite verbose, really. The person who wrote this was rather chatty!",
    'color' => 'pink'
   ],
   [
    'title' => 'Another card title #3',
    'body' => "In the real world, content is never perfectly balanced between content cards. And if it is, well you’ve been extremely lucky in your career!",
    'color' => 'violet'
   ]
  ]]);
 })->name('subgrid-cards');
});

// Other routes that shouldn't show in the navigation
Route::view('/view-transitions/page-2', 'view-transitions.page-2')->name('view-transitions.page-2');
Route::view('/view-transitions/post-2', 'view-transitions.post-2')->name('view-transitions.post-2');
Route::view('/view-transitions/gallery/{item}', 'view-transitions.gallery.show')->name('view-transitions.gallery.show');
