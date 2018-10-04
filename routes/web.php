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

// RFID
Route::prefix('rfids')->group(function(){
    Route::get          ('/',                           'RfidController@index'                   )->name('rfid');
    Route::post         ('/add',                        'RfidController@add'                     )->name('rfid_add');
    Route::post         ('/save',                       'RfidController@store'                   )->name('rfid_save');
    Route::get          ('/update/{id}',                'RfidController@update'                  )->name('rfid_update');
    Route::post         ('/update/{id}/save',           'RfidController@update_save'             )->name('rfid_update_save');
    Route::get          ('/delete/{id}',                'RfidController@delete'                  )->name('rfid_delete');
   
});

Route::get('ajax', function(){ return view('ajax'); });
Route::post('/postajax','RfidController@post');
Route::post('/getajax/{student}','RfidController@getStudent');
Route::post('/updateajax/{student}','RfidController@updateStudent');

//BOOKISSUE
Route::post('/saveisbn','BookissueController@saveisbn');
Route::post('/getisbn/{isbn}','BookissueController@getIsbn');
Route::post('/updateisbn/{isbn}','BookissueController@updateIsbn');

//getstudentname
Route::post('/getname/{name}','BookissueController@getName');
Route::post('/updatename/{isbn}','BookissueController@updateIsbn');

//getnotif
Route::post('/getnotify/{notif}','HeaderController@getNotif');
Route::post('/updatenotify','HeaderController@updateNotif');

//getbooknumber
Route::post('/getbooknumber/{booknumber}','HeaderController@getBooknumber');
Route::post('/updatebooknumber','HeaderController@updateBooknumber');


Route::get('qrcodegenerator', function () {
    return view('QRCodegenerator.create');
});


Route::get('addreservation', function () {
    return view('reservations.create');
});
Route::resource('reservations','ReservationController');


Route::get('create', function () {
    return view('categories.create');
});
Route::resource('categories','CategoryController');

Route::resource('categoryTrash','CategoryTrashController');

Route::resource('bookTrash','BookTrashController');

Route::resource('gradeTrash','DepartmentTrashController');

Route::resource('sectionTrash','SectionTrashController');

Route::get('addsubject', function () {
    return view('subjects.create');
});
Route::resource('subjects','SubjectController');

Route::get('addsection', function () {
    return view('sections.create');
});
Route::resource('sections','SectionController');


Route::get('addgrade', function () {
    return view('grades.create');
});

Route::resource('grades','DepartmentController');

Route::get('bookissue', function () {
    return view('bookissues.create');
});
Route::resource('bookissues','BookissueController');

Route::get('', function () {
    return view('welcome');
});
Route::resource('dashboard','DashboardController');


Route::resource('/home','LmsController');


Route::resource('/generalsettings','GeneralsettingsController');




Route::resource('books','BookController');
Route::get('addmembers', function () {
    return view('members.create');
});
Route::resource('members','MemberController');
Route::get('/live_search', 'MemberController@action')->name('members.index');

Route::get('/register', 'RegisterController@index');

Route::get('home', function () {
    return view('home.index');
});
Route::get('/home','LmsController@search');
Route::get('/home','LmsController@index');

Route::get('about', function () {
    return view('home.about');
});
Route::resource('about','AboutController');


Auth::routes();


Route::get('addterms', function () {
    return view('terms.create');
});

Route::get('editProfile', function () {
    return view('settings.edit');
});

Route::get('/changePassword','ChangepasswordController@showChangePasswordForm');

Route::post('/changepassword','ChangepasswordController@changePassword')->name('changePassword');
 

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


// Route::group(['middleware' => 'auth'], function(){
//     Route::get('home.index', function(){
//           return view('home.index');
//     })->name('home');

//     Route::get('dashboard.index', function(){
//         return view('dashboard.index');
//     })->name('dashboard');

// });


Route::group(['middleware' => ['web', 'auth']],function (){
    Route::get('home.index', function (){
        return view('home.index');
    })->name('home');
});

Route::get('dashboard.index', function (){
    if (Auth::user()->admin == 0){
        return view('home.index');
    }else{
        $users['users'] = \App\User::all();
        return view('dashboard.index', $users);
    }
});

Route::get('charts', function(){
    return view('admin.charts-chartjs');
});