<?php



 Route::get('/', 'HocSinhController@getList');

Route::get('/store', 'HocSinhController@store');

Route::post('/insert', 'HocSinhController@insert');

Route::get('/edit/{id}', 'HocSinhController@edit');

Route::post('/update', 'HocSinhController@update');

Route::get('/remove/{id}', 'HocSinhController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/register','HomeController@register');

Route::post('/login','HomeController@login');

Route::prefix('api/v1/hocsinh')->group(function () {
    Route::get('/','ApiController@getList');
});