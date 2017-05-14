<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('user/{name}-{age}/view', 'HomeController@profile')->name('user.profile');

Route::group(['prefix' => 'news'], function($route){
    $route->get('/', 'ArticleController@index')->name('article.index');
    $route->get('create', 'ArticleController@create');
    $route->post('create', 'ArticleController@store');
    $route->get('/{slug}', 'ArticleController@show')->name('article.show');
});
