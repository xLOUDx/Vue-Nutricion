<?php

// Route::group(['middleware'=>['auth']], function(){
//   Route::get('/', function () {
//     return view('/home');
//   });

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', 'PatientsController@index');

Route::resource('/search', 'PatientsController');

Route::post('/getDataPatient', 'PatientsController@getData');

Route::resource('/search/patients', 'BinnacleController');

Route::resource('/search/patients/comment', 'CommentsController');

Route::resource('/newblog', 'PostController');

Route::post('/getDataPost', 'PostController@getData');

Route::resource('/items', 'CommentsController');

Route::post('/getDataComment', 'CommentsController@getDataComment');

Route::post('/getData', 'BinnacleController@getData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// });

Auth::routes();

Route::get('/blog', 'BinnacleController@index')->name('blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
