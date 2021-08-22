<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreDescription extends Model
{
    //
    protected $guarded = [];

    protected $table = 'stores_descriptions';

    public function storeName()
    {
        return $this->belongsTo(ContactUs::class,'store_id');
    }

    public function storeImage()
    {
        return $this->hasMany(StoreImage::class,'store_id');
    }
}
