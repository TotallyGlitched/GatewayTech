<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pro', function () {
    return view('product');
});

Route::get('/search', function () {
    return view('search');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');