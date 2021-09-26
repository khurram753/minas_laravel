<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }

    public function material()
    {
        return $this->belongsTo(Material::class,'material_id');
    }

    public function cord()
    {
        return $this->belongsTo(Cord::class,'cord_id');
    }

}
