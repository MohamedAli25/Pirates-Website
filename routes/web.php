<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('User.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
