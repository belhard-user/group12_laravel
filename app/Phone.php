<?php

namespace App;

use App\People;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['phone'];

    public function people()
    {
        return $this->belongsTo(People::class);
    }
}
