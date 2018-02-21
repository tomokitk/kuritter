<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Follow;
use App\MikeTweet;
use App\Retweet;

class RetweetController extends Controller
{
    public function retweet(Request $request){
    
    $retweet=new Retweet();
    $user=Auth::user();
    //dd($tweet);
    $retweet->user_id=$user->id;

    //以下の取り方だとtweetという変数からidをとっている。つまりどのツイートのidなのかがわからないから、そりゃ取れない。idはview
    //から取ってくるべし。
    $retweet->message_id=$request->message_id;

    $retweet->save();
    $tweet=MikeTweet::all();
    $make_retweet=Retweet::all();

    return view("show")->with('my_id',$user)
                       ->with('mike_tweets',$tweet)
                       //->with('retweet',$retweet)
                       ->with('make_retweet',$make_retweet);

    // //return view('my_account')->with('my_id',$user)
    //                          ->with('tweet',$tweet)
    //                          ->with('retweet',$retweet)
    //                          ->with('make_retweet',$make_retweet);
    // 
}



}
