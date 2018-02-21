<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MikeTweet;

class My_accoutController extends Controller
{
    public function my_account(Request $request){
        $user=Auth::User();
        $tweet=MikeTweet::where('user_id',$user->id);
        $tweet=MikeTweet::all();

        return view('my_account')->with('my_id',$user)
                                 ->with('tweet',$tweet);

    }






}

