<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet; 
use Illuminate\Support\Facades\Auth;
use App\Like;

class ShowController extends Controller
{  public function show(Request $request){
    $tweet = new MikeTweet ();
    $user=Auth::user(); // ログインしているidを取っている
    $tweet->user_id=$user->id;
    $tweet->message=$request->message;
    $tweet-> save();
    $tweet=MikeTweet::all();
    $likeAll=Like::all();
    
    return view('show')->with('mike_tweets',$tweet)->with('likes',$likeAll);
 }
    
     
}
    //public function timeline(Request $request){

    //$tweet=MikeTweet::all();
    //return view('show');



//}














  
