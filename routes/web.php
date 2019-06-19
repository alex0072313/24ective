<?php

Route::get('/', 'HomeController@index');
Route::get('/{zk}', 'ZkController@index');
Route::get('/contacts', 'ContactsController@index');
Auth::routes();
