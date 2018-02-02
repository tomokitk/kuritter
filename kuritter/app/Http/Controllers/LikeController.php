<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet;

class LikeController extends Controller
{
    public function like(Request $request){
    $like = new Like ();
    $user=Auth::user(); // ログインしているidを取っている
    $message_id=MikeTweet::$user->id(); // ログインしているidを取っている
    //$tweet->message=$request->message;
    $like-> save();
    return redirect('/');
}

}
     

    //$Like = new MikeTweet ();
    //$Like=Auth::user(); // ログインしているidを取っている
    //$message_id=MikeTweet::id(); // ログインしているidを取っている
    //$Like->message_id=$id->id;
    //$tweet->message=$request->message;
    //$Like-> save();
    //return redirect('/');

