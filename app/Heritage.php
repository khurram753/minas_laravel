<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heritage extends Model
{
    //
    protected $guarded = [];

    public function getImageAttribute($value)
    {
        return asset($value);
    }
}
