<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Testing
Route::get('/', function () {
    return view('try');
});

// AdminController
Route::get('/admin/admin-panel', 'AdminController@showAdminPanel');

// CommitteeController
Route::resource('/committee', 'CommitteeController');
Route::get('/committee/show-detailed', 'CommitteeController@indexDetailed')->name('committee.indexDetailed');
Route::get('/committee/{id}/show-detailed', 'CommitteeController@showDetailed')->name('committee.showDetailed');

// CrewMember
Route::resource('/crew-member', 'CrewMemberController');

// EventController
Route::resource('/event', 'EventController');
Route::get('/event/show-detailed', 'EventController@indexDetailed')->name('event.indexDetailed');
Route::get('/event/{id}/show-detailed', 'EventController@showDetailed')->name('event.showDetailed');

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
Route::get('/seminar/detailed', 'SeminarController@indexDetailed')->name('seminar.indexDetailed');
Route::get('/seminar/{id}/detailed', 'SeminarController@showDetailed')->name('seminar.indexDetailed');

// SpeakerController
Route::resource('/speaker', 'SpeakerController');

// TimeSlotController
Route::resource('/time-slot', 'TimeSlotController');

// UserController
Route::resource('/user', 'UserController');
Route::get('/user/{id}/show-detailed', 'UserController@showOneDetailed')->name('user.indexDetailed');

// Auth Routes
Auth::routes();
