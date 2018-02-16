<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;// ここでUserってモデルを使います！っていう。
use Illuminate\Support\Facades\Auth;
use App\Follow;

class UserController extends Controller
{

    public function user(Request $request){  

    $user=Auth::user();
    $users = User::where("id","!=",$user->id)->get();
    $users = User::all();
    $following = Follow::all();
    return view('user_list')->with('users',$users)
                            ->with('my_id',$user)
                            ->with('following',$following);
        
        
        
        
        
        
        
        
        
        
        
        
        //if($request->id=="follow"){
        //$follow = new Follow();
        //$user=Auth::user();
        //$follow->from_user_id=$user->id;
        //$follow->to_user_id=$request->id;
        //$follow->save();
    //}else if($request->id=="delete"){
        //$break= User::findOrFail($request->id);
        //$break=delete();
    //}
        //$users = User::where("id","!=",$user->id)->get();
        //$users = User::all();
   
        //return view('user_list')->with('users',$users);
    }

}






       // $user=Auth::user();
        
        //$users = User::where("id","!=",$user->id)->get();
        //$users = User::all();
        
        
       // return view('user_list')->with('users',$users);
        
    