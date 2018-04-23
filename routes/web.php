<?php

Route::get('/', 'PatientsController@index');

Route::resource('/search', 'PatientsController');

Route::post('/getDataPatient', 'PatientsController@getData');

Route::resource('/search/patients', 'BinnacleController');

Route::resource('/search/patients/comment', 'CommentsController');

Route::resource('/items', 'CommentsController');

Route::post('/getDataComment', 'CommentsController@getDataComment');

Route::post('/getData', 'BinnacleController@getData');
