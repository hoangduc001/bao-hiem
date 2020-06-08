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

Route::get('/learning', function () {
    return view('frontend.pages.learning');
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
Route::get('/profile-user', function () {
    return view('frontend.pages.profile');
});
// ========================signi-out======================
Route::get('/signin', function () {
    return view('frontend.pages.signin');
});
Auth::routes();

Route::get('/profile', 'UsersController@index')->name('profile');


