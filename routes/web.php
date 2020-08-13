<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Products
Route::get('/', 'ProductController@index')->name('products.index');

Route::middleware('auth')->group(function () {
    Route::get('home', 'HomeController')->name('home');
});

Auth::routes(['reset' => false]);
