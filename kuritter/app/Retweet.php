<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MikeTweet;
use App\Retweet;

class retweet extends Model
{

    //メイクツイートとテーブル結合（"id"は省略される)model名と合わせる
    public function MikeTweet(){
        return $this->belongsTo('App\MikeTweet','message_id');
    }
}
