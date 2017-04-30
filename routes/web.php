<?php

Route::any('/', 'TestController@index');
Route::name('hello-page')->get('hello/{name}-{lname}', 'TestController@hello')
->where([
    'name'=>'[a-zA-Z]+',
    'lname' => '[a-zA-Z]+'
]);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function($r){
    $r->get('/', 'IndexController@index');
});