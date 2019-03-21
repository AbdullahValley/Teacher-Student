<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'UserController@create')->name('register');

Route::POST('/register', 'UserController@store');


Route::get('/login', 'UserController@login_form')->name('login');

Route::POST('/login', 'UserController@login');

Route::get('/logout', 'UserController@logout');

Route::resource('student', 'StudentController')->middleware('checkStudent');

Route::resource('teacher', 'TeacherController')->middleware('checkTeacher');

Route::resource('routine', 'RoutineController')->middleware('checkRoutine');

Route::resource('council', 'CouncilController')->middleware('checkRoutine');


