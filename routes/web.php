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


//============hoangduc==========================================

Route::prefix('admin')->group(function (){

    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('charts', function () {
        return view('admin.charts');
    })->name('admin.charts');

    Route::get('widgets', function () {
        return view('admin.widgets');
    })->name('admin.widgets');

    Route::get('tables', function () {
        return view('admin.tables');
    })->name('admin.tables');

    Route::get('grid', function () {
        return view('admin.grid');
    })->name('admin.grid');

    Route::get('from-basic', function () {
        return view('admin.from-basic');
    })->name('admin.from-basic');

    Route::get('form-wizard', function () {
        return view('admin.form-wizard');
    })->name('admin.form-wizard');

    Route::get('pages-buttons', function () {
        return view('admin.pages-buttons');
    })->name('admin.pages-buttons');

    Route::get('icon-material', function () {
        return view('admin.icon-material');
    })->name('admin.icon-material');

    Route::get('icon-fontawesome', function () {
        return view('admin.icon-fontawesome');
    })->name('admin.icon-fontawesome');

    Route::get('pages-elements', function () {
        return view('admin.pages-elements');
    })->name('admin.pages-elements');

    Route::get('index2', function () {
        return view('admin.index2');
    })->name('admin.index2');

    Route::get('pages-gallery', function () {
        return view('admin.pages-gallery');
    })->name('admin.pages-gallery');

    Route::get('pages-calendar', function () {
        return view('admin.pages-calendar');
    })->name('admin.pages-calendar');

    Route::get('pages-invoice', function () {
        return view('admin.pages-invoice');
    })->name('admin.pages-invoice');

    Route::get('pages-chat', function () {
        return view('admin.pages-chat');
    })->name('admin.pages-chat');

    Route::get('authentication-login', function () {
        return view('admin.authentication-login');
    })->name('admin.authentication-login');

    Route::get('authentication-register', function () {
        return view('admin.authentication-register');
    })->name('admin.authentication-register');

    Route::get('error-403', function () {
        return view('admin.error-403');
    })->name('admin.error-403');

    Route::get('error-404', function () {
        return view('admin.error-404');
    })->name('admin.error-404');

    Route::get('error-405', function () {
        return view('admin.error-405');
    })->name('admin.error-405');


    Route::get('error-500', function () {
        return view('admin.error-500');
    })->name('admin.error-500');
});



