<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Hacky way to get auto-navigation working in the frontend
Route::prefix('')->name('demos.')->group(function () {
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
