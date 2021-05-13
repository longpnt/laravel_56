<?php



Route::get('/', 'HocSinhController@getList');

Route::get('/store', 'HocSinhController@store');

Route::post('/insert', 'HocSinhController@insert');

Route::get('/edit/{id}', 'HocSinhController@edit');

Route::post('/update', 'HocSinhController@update');

Route::get('/remove/{id}', 'HocSinhController@remove');

// DO SOME THING