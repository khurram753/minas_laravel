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
}
