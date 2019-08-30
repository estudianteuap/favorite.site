<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $fillable=['resenia', 'valorizacion','user_id'];

    public function fotos(){
        return $this->hasMany(fotos::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
