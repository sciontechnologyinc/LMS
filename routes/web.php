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



Route::get('create', function () {
    return view('categories.create');
});

Route::resource('categories','CategoryController');


Route::get('', function () {
    return view('welcome');
});
Route::resource('dashboard','DashboardController');


Route::resource('books','BookController');

Route::get('addmembers', function () {
    return view('members.create');
});

Route::resource('members','MemberController');


Route::get('generalsettings', function () {
    return view('admin.pages.generalsettings');
});

Route::get('/register', 'RegisterController@index');

Route::get('/pages', 'GeneralsettingsController@index');

Route::post('/store', 'GeneralsettingsController@store')->name('pages.store');


Route::get('lms', function () {
    return view('lms.pages.home');
});

Route::get('contact', function () {
    return view('lms.pages.contact');
});

Route::get('about', function () {
    return view('lms.pages.about');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('addterms', function () {
    return view('terms.create');
});

Route::resource('terms','TermController');



//Category
Route::get('books.create','CategoryController@categorycheckbox');




