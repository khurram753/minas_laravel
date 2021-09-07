<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QualityCraftsmanship extends Model
{
    //
    protected $guarded = '';
    protected $table = 'quality_craftsmanships';

    public function process()
    {
        return $this->hasMany(QualityCraftsmanshipProcess::class,'quality_id');
    }

    public function orderedProcess()
    {
        return $this->hasMany(QualityCraftsmanshipProcess::class,'quality_id')->orderBy('step_number','asc');
    }
}
