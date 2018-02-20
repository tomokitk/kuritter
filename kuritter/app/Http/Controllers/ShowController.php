<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet; 
use Illuminate\Support\Facades\Auth;
use App\Like;
use Illuminate\Support\Facades\Log;

class ShowController extends Controller
{  public function show(Request $request){
    $tweet = new MikeTweet ();
    $user=Auth::user(); // ログインしているidを取っている
    $tweet->user_id=$user->id;
    $tweet->message=$request->message;
    //Log::info("likeメソッド".$user->id.$tweet->message_id);
    $tweet-> save();
    $tweet=MikeTweet::all();
    $likeAll=Like::all();
    
    return view('show')->with('mike_tweets',$tweet)
                       ->with('my_id',$user);
 }    
}
    //public function timeline(Request $request){

    //$tweet=MikeTweet::all();
    //return view('show');



//}














  
