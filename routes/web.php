<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// AdminController
Route::get('/admin/admin-panel', 'AdminController@showAdminPanel');

// CommitteeController
Route::resource('/committee', 'CommitteeController');
Route::get('/committee/show-detailed', 'CommitteeController@showAllDetailed');
Route::get('/committee/{id}/show-detailed', 'CommitteeController@showOneDetailed');

// CrewMember
Route::resource('/crew-member', 'CrewMemberController');

// EventController
Route::resource('/event', 'EventController');
Route::get('/event/show-detailed', 'EventController@showAllDetailed');
Route::get('/event/{id}/show-detailed', 'EventController@showOneDetailed');

// EventApplicant
Route::resource('/event-applicant', 'EventApplicantController');

// GeneralController
Route::redirect('/', '/home');
Route::get('/home', 'GeneralController@home')->name('home');
Route::get('/about', 'GeneralController@about')->name('about');
Route::get('/contact', 'GeneralController@contact')->name('contact');
Route::get('/sign-in', 'GeneralController@signIn')->name('signIn');
Route::get('/sign-up', 'GeneralController@signUp')->name('signUp');

// PositionController
Route::resource('/position', 'PositionController');

// PreferenceController
Route::resource('/preference', 'PreferenceController');

// SeminarController
Route::resource('/seminar', 'SeminarController');
Route::get('/seminar/detailed', 'SeminarController@showAllDetailed');
Route::get('/seminar/{id}/detailed', 'SeminarController@showOneDetailed');

// SpeakerController
Route::resource('/speaker', 'SpeakerController');

// TimeSlotController
Route::resource('/time-slot', 'TimeSlotController');

// UserController
Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');
Route::get('/user/{id}/edit', 'UserController@edit');
Route::get('/user', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
Route::get('/user/{id}/show-detailed', 'UserController@showDetailed');

// Auth Routes
Auth::routes();
