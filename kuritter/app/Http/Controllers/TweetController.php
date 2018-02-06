<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function tweet(){

        return view('post.tweet');
    }


    public function store(Request $request){
        $tweet = new MikeTweet ();
        $user=Auth::user(); // ログインしているidを取っている
        $tweet->user_id=$user->id;
        $tweet->message=$request->message;
        $tweet-> save();
        return redirect('show');  ///show に飛ばす
    }
    




    
}
