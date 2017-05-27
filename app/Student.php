<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name'];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class); //->withPivot('note');
    }
}
