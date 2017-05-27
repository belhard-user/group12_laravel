<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name'];

    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot('note');
    }
}
