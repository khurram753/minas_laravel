<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //
    protected $guarded = [];

    public function press()
    {
        return $this->hasMany(PressTypeProduct::class,'collection_id');
    }
}
