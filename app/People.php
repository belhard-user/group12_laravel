<?php

namespace App;


use App\Article;
use App\Phone;
use Illuminate\Database\Eloquent\Model;


class People extends Model
{
    protected $table = 'peoples';

    protected $fillable = ['name'];

    // public $timestamps = false;

    public function phones() // phone_id
    {
        return $this->hasMany(Phone::class);
    }

    public function article()
    {
        return $this->hasOne(Article::class, 'id');
    }
}