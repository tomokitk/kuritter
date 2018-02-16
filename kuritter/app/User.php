<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Follow;
use App\Like;
use App\User;


class User extends Authenticatable
{
    use Notifiable;
    
    public function like(){
        return $this->hasone('App\like');
    }

    public function follow(){
        return $this->hasMany('App\follow','to_user_id');
    }
        //followテーブルからto_user_idを取得
    public function user(){
        return $this->hasMany('App\follow','to_user_id');
    }
    //public function timeline(){
      //  return $this->hasmany('App\MikeTweet');
        
   // }    
    
        /**
     * The attributes that are mass assignable.
     
     * @var array
     */
    protected $fillable =[   
      'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
