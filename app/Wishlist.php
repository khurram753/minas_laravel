<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //
    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Product::class,'product_id');
    }

    public function user()
    {
        return $this->hasMany(User::class,'user_id');
    }
}
