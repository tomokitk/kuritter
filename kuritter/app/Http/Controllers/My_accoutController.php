<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MikeTweet;
use App\Retweet;

class My_accoutController extends Controller
{
    public function my_account(Request $request){
        $user=Auth::User();
        $tweet=MikeTweet::where('user_id',$user->id)->get();
        // $tweet=MikeTweet::all();
        $make_retweet=Retweet::all();

        // $tweet_array[]=array('id'=>'りんご', 'message'=>'もも', 'retweet_id'=>'なし');
        // $tweet_array[]=array('id'=>'りんご2', 'message'=>'もも2', 'retweet_id'=>'なし2');
        foreach($tweet as $child ){
            $tweet_array[]=array('id'=>$child->id, 'message'=>$child->message, 'retweet_id'=>'0');
        }
        foreach($make_retweet as $retweet){
            $tweet_array[]=array('id'=>$retweet->id,'message'=>$retweet->message,'retweet_id'=>'1');
        }
        return view('my_account')->with('my_id',$user)
                                 ->with('mike_tweets',$tweet)
                                 ->with('make_retweets',$make_retweet)
                                 ->with('tweet_arrays',$tweet_array);

    }


    // public function like(Request $request){
    //     //if($request->submit_value== "delete"){
    //     $user=Auth::User();
    //     $tweet=MikeTweet::where('user_id',$user->id);
    //     $break = MikeTweet::where('user_id',$user->id);
    //     $break->delete();
    //     //}
    //     $tweet=MikeTweet::all();

    //     return view('my_account')->with('my_id',$user)
    //                              ->with('tweet',$tweet);
    // }


}

