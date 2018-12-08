<?php


Route::prefix('dscan')->group(function () {
	Route::get('/new','Azak1r\Dscan\Http\Controllers\DscanController@create')->name('new');
	Route::get('/results','Azak1r\Dscan\Http\Controllers\DscanController@show')->name('result');
	Route::post('/postscan', 'Azak1r\Dscan\Http\Controllers\DscanController@store');
});