<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Testing
// Route::get('/', 'Auth\ResetPasswordController@showResetForm');
Route::get('/', function () {
    return view('event.show_one_detailed');
});
// Route::get('/', function () {
//     return view('user.confirm_password');
// });

// Home Redirect
// Route::redirect('/', "/home");

// AdminController
Route::get('/admin/admin-panel', 'AdminController@showAdminPanel')->name('admin_panel');

// CommitteeController
Route::get('/committee/show-detailed', 'CommitteeController@indexDetailed')->name('committee.indexDetailed');
Route::get('/committee/{committee}/show-detailed', 'CommitteeController@showDetailed')->name('committee.showDetailed');
Route::resource('/committee', 'CommitteeController');

// CrewMember
Route::resource('/crew-member', 'CrewMemberController');

// EventController
Route::get('/event/show-detailed', 'EventController@indexDetailed')->name('event.indexDetailed');
Route::get('/event/{event}/show-detailed', 'EventController@showDetailed')->name('event.showDetailed');
Route::resource('/event', 'EventController');

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
Route::get('/seminar/detailed', 'SeminarController@indexDetailed')->name('seminar.indexDetailed');
Route::get('/seminar/{seminar}/detailed', 'SeminarController@showDetailed')->name('seminar.indexDetailed');
Route::resource('/seminar', 'SeminarController');

// SpeakerController
Route::resource('/speaker', 'SpeakerController');

// TimeSlotController
Route::resource('/time-slot', 'TimeSlotController');

// UserController
Route::get('/user/{user}/show-detailed', 'UserController@showOneDetailed')->name('user.indexDetailed');
Route::resource('/user', 'UserController');

// Auth Routes
Auth::routes();
