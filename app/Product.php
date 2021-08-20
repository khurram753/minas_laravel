<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];

    public function cord()
    {
        return $this->belongsToMany(Cord::class,PivotCordProduct::class,'product_id','cord_id');
    }

    public function material()
    {
        return $this->belongsToMany(Material::class,PivotMaterialProduct::class,'product_id','material_id');
    }
}
