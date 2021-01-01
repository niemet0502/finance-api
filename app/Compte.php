<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = ['numero', 'solde', 'etat', 'client_id'];

    public function Operations(){
        return $this->hasMany('App\Operation');
    }
}
