<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;// ここでUserってモデルを使います！っていう。
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function user(Request $request){  
        $user=Auth::user();
        
        $users = User::where("id","!=",$user->id)->get();
        $users = User::all();
        
        return view('user_list')->with('users',$users);
        
    }

}