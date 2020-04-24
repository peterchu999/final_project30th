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

Route::get('/dashboard','UserController@showLibraryBook')->name('Dashboard');

Route::get('/edit-profile','UserController@ShowProfile')->name('show-profile');

Route::post('/change-profile','UserController@ChangeProfile');

Route::post('/get-book','UserController@getBook');

Route::get('/show-collection','UserController@showCollection');

Route::post('/remove-book','UserController@removeBook');

Route::get('/log-out','UserController@LogOut');

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'AdminController@adminDashboard')->middleware('admin');
    Route::get('/add-view','AdminController@addView');
    Route::post('/add-book','AdminController@addBook');
    Route::post('/edit-book','AdminController@editBook');
    Route::post('/edit-view','AdminController@editView');
    Route::post('delete','AdminController@deleteBook');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
