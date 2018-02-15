<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet;
use App\Like;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function timeline(Request $request){
        $like=Like::all();
         $user = Auth::User();
         $tweet=MikeTweet::all();
        //  $tweet=$tweet->like->where('user_id','=',$user->id)->get();
        return view('show')
                ->with('mike_tweets',$tweet)
                ->with('likes',$like)
                ->with('user',$user);
        //dd($tweet);

}

}




    