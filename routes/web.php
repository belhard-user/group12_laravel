<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('user/{name}-{age}/view', 'HomeController@profile')->name('user.profile');
