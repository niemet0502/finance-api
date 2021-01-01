<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = ['numero', 'montant', 'client_id', 'compte_id', 'user_id'];

    public function Compte(){

        return  $this->belongsTo('App\Compte');
    }

    public function Type(){
        return $this->belongsTo('App\Type');
    }

    public function User(){
        return $this->belongsTo('App\User');
    }
}
