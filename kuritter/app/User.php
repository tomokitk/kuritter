<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Follow;
use App\Like;



class User extends Authenticatable
{
    use Notifiable;
    
    public function like(){
        return $this->hasMany('App\like');
    }

    public function follow(){
        return $this->hasMany('App\follow',to_user_id);
    }

    
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
