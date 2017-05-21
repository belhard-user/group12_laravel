<?php
Auth::routes();

Route::get('form', 'RequestController@index');
Route::post('form', 'RequestController@store')->name('form');

Route::get('/', 'HomeController@index')->name('home');
Route::get('relations', 'RelationController@index')->name('relation');
Route::get('relations/user', 'RelationController@user')->name('relation.user');
Route::get('user/{name}-{age}/view', 'HomeController@profile')->name('user.profile');

Route::group(['prefix' => 'news'], function($route){
    $route->get('/', 'ArticleController@index')->name('article.index');
    $route->get('create', 'ArticleController@create')->name('article.create');
    $route->get('{article}/edit', 'ArticleController@edit')->name('article.edit');
    $route->put('{article}/edit', 'ArticleController@update')->name('article.update');
    $route->post('create', 'ArticleController@store');
    $route->get('/{article}', 'ArticleController@show')->name('article.show');
});
