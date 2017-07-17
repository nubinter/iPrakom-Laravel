<?php

Route::get('/', 'PostController@index');
Route::get('add', 'PostController@add');
Route::post('save', 'PostController@save');
Route::get('edit/{id}', 'PostController@edit');
Route::post('edit', 'PostController@saveedit');
Route::get('delete/{id}', 'PostController@delete');
