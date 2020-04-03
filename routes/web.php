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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/test', function() {
    return view('test');
});

Route::get('users/{id}', function ($id) {

});

Route::resource('/admin/days', 'DayController');

Route::resource('/admin/majors', 'MajorController');

Route::resource('/admin/times', 'TimeController');

Route::resource('/admin/subjects', 'SubjectController');

Route::resource('/admin/timetables', 'TimeTableController');

Route::resource('/guests/timetable', 'GuestsTimeTablesController');

Route::resource('/admin/studentsinfo', 'StudentInfoController');