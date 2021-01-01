<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['libelle'];

    public function Operations(){
        return $this->hasMany('App\Operation');
    }
}
