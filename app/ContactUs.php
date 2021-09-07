<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    //
    protected $guarded = [];

    protected $table = 'contact_us_stores';


    public function storeDescription()
    {
        return $this->hasOne(StoreDescription::class,'store_id');
    }
}
