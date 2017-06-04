<?php

class Car
{
    public function __construct(A $a, $name=null)
    {
        // dump($a, $name);
        $this->a = $a;
        $this->name = $name;
    }

    public function foo()
    {
        return $this->a->foo();
    }
}

class A
{
    public $name;

    public function __construct($name='Neo')
    {
        $this->name = $name;
    }

    public function foo()
    {
        return $this->name;
    }
}

/*$car = app(Car::class, ['a'=> new A('Tank'), 'name' => 'TTTTT']);
dump($car);
dump($car->foo());
die;*/

Auth::routes();
Route::get('home-home', 'HomeController@someMethod');
Route::get('/', 'HomeController@index')->name('home');
Route::get('user/{name}-{age}/view', 'HomeController@profile')->name('user.profile');

Route::group(['prefix' => 'news'], function($route){
    $route->get('/', 'ArticleController@index')->name('article.index');
    $route->get('create', 'ArticleController@create')->name('article.create');
    $route->get('{article}/edit', 'ArticleController@edit')->name('article.edit');
    $route->put('{article}/edit', 'ArticleController@update')->name('article.update');
    $route->post('create', 'ArticleController@store');
    $route->get('/{article}', 'ArticleController@show')->name('article.show');
});
