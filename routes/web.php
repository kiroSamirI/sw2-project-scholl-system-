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
Route::post('/login/custom' ,[
    'uses' => 'LoginController@login',
    'as'  => 'login.custom'
]);
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/user_home', function(){
    return view('AdminPanels.user');
})->name('user_home');

Route::get('/admin_home', function(){
    return view('AdminPanels.admin');
})->name('admin_home');

Route::get('/teacher_home', function(){
    return view('AdminPanels.teacher');
})->name('teacher_home');
Route::resource('Classes','ClassesController');

Route::resource('/teacher' , 'teacherController');
Route::resource('/subject' , 'subjectController');

Route::resource('/mangeProfile' , 'mangeProfileController');
