<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet; 
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
   public function show(){
      
        $shows=MikeTweet::all();
        return view('show')->with('mike_tweets',$shows);
    }
    
}
