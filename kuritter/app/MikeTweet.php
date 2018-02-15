<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;

class MikeTweet extends Model
{
    //
    public function like(){
        return $this->hasMany('App\Like','message_id');
    }

    public function isMyLike($userId){
        $myLike = false;
              
        // 自分のIDがあるかどうかチェック
        foreach($this->like as $LikeData){
            if($LikeData->user_id == $userId){
                $myLike = true;
                break;
            }
        }

        return $myLike;
    } 
}
