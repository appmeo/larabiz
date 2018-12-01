<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Listing extends Model
{

    //add relatoinship between a listing and a user
    public function user(){
        return $this->belongsTo('App\User');
    }
}
