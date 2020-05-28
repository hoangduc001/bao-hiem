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
    return view('frontend.home');
});
// ====================courses================
Route::get('/course-detail', function () {
    return view('frontend.pages.course-detail');
});
Route::get('/courses', function () {
    return view('frontend.pages.courses');
});
//=================luyện thi==================
Route::get('/pre-certi', function () {
    return view('frontend.pages.pre-certi');
});
Route::get('/test-list', function () {
    return view('frontend.pages.test-list');
});
//=========================vào thi=================
Route::get('/enroll', function () {
    return view('frontend.pages.enroll');
});
Auth::routes();

Route::get('/profile', 'UsersController@index')->name('profile');


