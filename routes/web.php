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

Route::resource('rfid','RfidController');
Route::get('addsubject', function () {
    return view('subjects.create');
});
Route::resource('subjects','SubjectController');
Route::get('adddepartment', function () {
    return view('departments.create');
});
Route::resource('departments','DepartmentController');
Route::get('bookissue', function () {
    return view('bookissues.create');
});
Route::resource('bookissues','BookissueController');
Route::get('', function () {
    return view('welcome');
});
Route::resource('dashboard','DashboardController');

Route::resource('/home','LmsController');


Route::resource('books','BookController');
Route::get('addmembers', function () {
    return view('members.create');
});
Route::resource('members','MemberController');
Route::get('generalsettings', function () {
    return view('admin.pages.generalsettings');
});
Route::get('/register', 'RegisterController@index');
Route::post('/store', 'GeneralsettingsController@store')->name('pages.store');

Route::get('home', function () {
    return view('home.index');
});
Route::get('/home','LmsController@search');
Route::get('/home','LmsController@index');
Route::get('/rfid', function () {
    return view('rfid/monitoring');
});
Route::get('/rfid','RfidController@rfid');
Route::get('contact', function () {
    return view('home.contact');
});
Route::get('about', function () {
    return view('home.about');
});
Route::get('about', 'GeneralsettingsController@index');

Auth::routes();


Route::get('addterms', function () {
    return view('terms.create');
});

Route::get('changepassword', function () {
    return view('settings.index');
});

Route::resource('terms','TermController');
//Category
Route::get('books/create','CategoryController@categorycheckbox');
//category edit
Route::get('books/edit','CategoryController@categorycheckbox1');
//subject
Route::get('members/create','SubjectController@subjectcheckbox');
//department
Route::get('bookissues/create','BookController@booksdropdown');


Route::get('', ['middleware' => 'cors', function() {
    return view('welcome');
}]);


Route::post('/home', [
    'uses' => 'LoginController@login',
    'as'   => 'home.index'
]);


Route::group(['middleware' => 'auth'], function(){
    Route::get('home.index', function(){
          return view('home.index');
    })->name('home');;

    Route::get('dashboard.index', function(){
        return view('dashboard.index');
    })->name('dashboard');

});

