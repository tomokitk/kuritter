<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet;

class TimelineController extends Controller
{
    public function timeline(){

        $tweet=MikeTweet::all();
        return view('show')->with('mike_tweets',$tweet);

}

}