<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact')  ;
});


Route::get('/test', function () {
    return view('test');
});
;

Route::get('/{locale}/posts', function () {
    // ...
})->name('post.index');

