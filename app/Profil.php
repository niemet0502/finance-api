<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = ['libelle'];

    public function Users(){
        return $this->hasMany('App\User');
    }
}
