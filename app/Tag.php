<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];


    public function pertanyaan()
    {
        return $this->belongsToMany('App\Pertanyaan','pertanyaan_tags','tag_id','pertanyaan_id');
    }
}
