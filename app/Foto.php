<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fotos extends Model
{
    public function album(){
        return $this->belongsTo(album::class);
    }
}
