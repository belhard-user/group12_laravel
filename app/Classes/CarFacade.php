<?php
namespace App\Classes;

use Illuminate\Support\Facades\Facade;

class CarFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'car';
    }
}