<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('user/{name}-{age}/view', 'HomeController@profile')->name('user.profile');
Route::get('file', 'FileController@index');
Route::post('file', 'FileController@file');

Route::group(['prefix' => 'news'], function($route){
    $route->get('/', 'ArticleController@index')->name('article.index');
    $route->get('create', 'ArticleController@create')->name('article.create');
    $route->get('{article}/edit', 'ArticleController@edit')->name('article.edit');
    $route->put('{article}/edit', 'ArticleController@update')->name('article.update');
    $route->post('create', 'ArticleController@store');
    $route->get('/{article}', 'ArticleController@show')->name('article.show');
});
