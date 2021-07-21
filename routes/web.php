<?php
date_default_timezone_set('Asia/Jakarta');
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('attendance', 'AttendanceController');
    Route::resource('guru', 'AdminController');
});
