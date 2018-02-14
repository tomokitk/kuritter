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
        $tweet=MikeTweet::all();
        return view('show')->with('mike_tweets',$tweet)->with('likes',$like);
        //dd($tweet);

}

}