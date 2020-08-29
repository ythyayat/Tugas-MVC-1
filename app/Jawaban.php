<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $guarded = [];
    

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan','pertanyaan_id');
    }

    public function j_tepat()
    {
        return $this->hasOne('App\Pertanyaan','jawaban_tepat_id');
    }

}
