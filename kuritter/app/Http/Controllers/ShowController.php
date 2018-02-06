<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet; 
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
   public function show(Request $request){
    $tweet = new MikeTweet ();
    $user=Auth::user(); // ログインしているidを取っている
    $tweet->user_id=$user->id;
    $tweet->message=$request->message;
    $tweet-> save();
    $tweet=MikeTweet::all();
    return view('show')->with('mike_tweets',$tweet);
    }
    
}


///tweetcontroller のstore メソッドと一緒のもんを書けばいい。