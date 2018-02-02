<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;// ここでUserってモデルを使います！っていう。
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function user(){  
        $user=Auth::user();
   
     $users = User::where("id","!=",$user->id)->get();
     echo $users;
}

}