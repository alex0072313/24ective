<?php

Route::get('/', 'HomeController@index');
Route::get('/contacts', 'ContactsController@index');
Route::get('/{zk}', 'ZkController@index');
Auth::routes();
