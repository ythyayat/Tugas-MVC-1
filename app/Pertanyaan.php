<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $guarded = [];


    public function jawaban()
    {
        return $this->hasMany('App\Jawaban','pertanyaan_id');
    }

    public function j_tepat()
    {
        return $this->belongsTo('App\Jawaban','jawaban_tepat_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag','pertanyaan_tags','pertanyaan_id','tag_id');
    }
}
