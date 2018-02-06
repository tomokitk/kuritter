<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;

class MikeTweet extends Model
{
    //
    public function like(){
        return $this->hasMany('App\like');
    }

}
