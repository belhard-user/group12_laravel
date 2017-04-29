<?php

Route::any('/', function () {
    $url = route('hello-page', [
        'name' => 'neo',
        'test' => 'foobar',
        'bar' => 'asd',
        'lname' => 'tank',
    ]);

    return "<a href='$url'>link</a>";
});

Route::name('hello-page')->get('hello/{name}-{lname}', function($name, $lname){
    return "Hello " . ucwords(sprintf('%s %s', $name, $lname));
})
->where([
    'name'=>'[a-z]+',
    'lname' => '[a-z]+'
]);


Route::group(['prefix' => 'admin'], function($r){
    /**
     * @var \Illuminate\Routing\Router $r
     */
    $r->group(['prefix' => 'users'], function($r){
        $r->get('{name}/edit', function($name){
            return route('valera-page', ['name' => 'valera']);
        })->name('valera-page');
    });

    $r->group(['prefix' => 'news'], function($r){
        $r->get('{slug}/edit', function($slug){
            return "Edit $slug article";
        });
    });
});