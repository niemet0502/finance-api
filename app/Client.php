<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom', 'prenom', 'cni', 'adresse','tel', 'user_id'];

    public function User(){
        return $this->belongsTo('App\User');
    }
}
