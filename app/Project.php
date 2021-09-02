<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $guarded = [];

    public function projectGallery()
    {
        return $this->hasMany(ProjectImage::class,'project_id');
    }

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class,'category_id');
    }
}
