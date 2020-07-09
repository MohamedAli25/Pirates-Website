<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// GeneralController Routes
Route::get('/', '/home');
Route::get('/home', 'GeneralController@home')->name('home');
Route::get('/about', 'GeneralController@about')->name('about');
Route::get('/contact', 'GeneralController@contact')->name('contact');
Route::get('/sign-in', 'GeneralController@signIn')->name('signIn');
Route::get('/sign-up', 'GeneralController@signUp')->name('signUp');

// Auth Routes
Auth::routes();
