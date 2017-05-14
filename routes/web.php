<?php
Auth::routes();

Route::get('form', 'RequestController@index');
Route::post('form', 'RequestController@store')->name('form');

Route::get('/', 'HomeController@index')->name('home');
Route::get('user/{name}-{age}/view', 'HomeController@profile')->name('user.profile');

Route::group(['prefix' => 'news'], function($route){
    $route->get('/', 'ArticleController@index');
    $route->get('/{slug}', 'ArticleController@show')->name('article.show');
});
