<?php

Route::get('/', 'PatientsController@index');

Route::resource('/search', 'PatientsController');

Route::post('/getDataPatient', 'PatientsController@getData');

Route::resource('/search/patients', 'BinnacleController');

Route::resource('/search/patients/comment', 'CommentsController');

Route::post('/getData', 'BinnacleController@getData');
