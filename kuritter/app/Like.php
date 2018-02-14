<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MikeTweet;
use App\User;



class Like extends Model
{
public function timeline(){
    return $this->hasmany('App\MikeTweet');

}    

}

