<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet;
use App\Like;

class TimelineController extends Controller
{
    public function timeline(){
        $like=Like::all();
        $tweet=MikeTweet::all();
        return view('show')->with('mike_tweets',$tweet)->with('likes',$like);

}

}