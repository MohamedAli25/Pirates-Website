<?php

use Illuminate\Support\Facades\Route;


// Route::get('{pageid}', function ($pageid) {
//     return view($pageid);
// }




// Route::get('image-upload', 'ImageController@show')->name('image.upload');
// Route::post('image-upload', 'ImageController@save')->name('image.upload.post');

// Auth::routes();

Route::get('/', function () {
    return view('User.home_page');
});
// Route::get('/home', 'HomeController@index')->name('home');
