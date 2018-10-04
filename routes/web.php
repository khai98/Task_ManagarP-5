<?php

Route::group(['prefix'=>'/tasks'],function(){

    Route::get('/', 'TaskController@index')->name('index');

    Route::get('/create', 'TaskController@create')->name('create');

    Route::post('/create', 'TaskController@store')->name('store');

    Route::get('/delete/{id}/', 'TaskController@delete')->name('delete');

    Route::get('/edit/{id}', 'TaskController@edit')->name('edit');

    Route::post('/edit/{id}/', 'TaskController@update')->name('update');


});
