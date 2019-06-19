<?php

Route::get('/', 'HomeController@index');
Route::get('/{zk}', 'zkController@index');
Route::get('/contacts', 'ContactsController@index');
Auth::routes();
