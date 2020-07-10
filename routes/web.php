<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Testing
Route::get('/', function () {
    return view('user.sign_up');
});

// AdminController
Route::get('/admin/admin-panel', 'AdminController@showAdminPanel');

// CommitteeController
Route::resource('/committee', 'CommitteeController');
Route::get('/committee/show-detailed', 'CommitteeController@indexDetailed');
Route::get('/committee/{id}/show-detailed', 'CommitteeController@showDetailed');

// CrewMember
Route::resource('/crew-member', 'CrewMemberController');

// EventController
Route::resource('/event', 'EventController');
Route::get('/event/show-detailed', 'EventController@indexDetailed');
Route::get('/event/{id}/show-detailed', 'EventController@showDetailed');

// EventApplicant
Route::resource('/event-applicant', 'EventApplicantController');

// GeneralController
// Route::redirect('/', '/home');
Route::get('/home', 'GeneralController@home')->name('home');
Route::get('/about', 'GeneralController@about')->name('about');
Route::get('/contact', 'GeneralController@contact')->name('contact');
// Route::get('/sign-in', 'GeneralController@signIn')->name('signIn');
// Route::get('/sign-up', 'GeneralController@signUp')->name('signUp');

// PositionController
Route::resource('/position', 'PositionController');

// PreferenceController
Route::resource('/preference', 'PreferenceController');

// SeminarController
Route::resource('/seminar', 'SeminarController');
Route::get('/seminar/detailed', 'SeminarController@indexDetailed');
Route::get('/seminar/{id}/detailed', 'SeminarController@showDetailed');

// SpeakerController
Route::resource('/speaker', 'SpeakerController');

// TimeSlotController
Route::resource('/time-slot', 'TimeSlotController');

// UserController
Route::resource('/user', 'UserController');
Route::get('/user/{id}/show-detailed', 'UserController@showOneDetailed');

// Auth Routes
Auth::routes();
