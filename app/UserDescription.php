<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDescription extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\User');
    }
}
