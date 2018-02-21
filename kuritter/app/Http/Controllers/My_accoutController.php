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
        $make_retweet=Retweet::where('user_id',$user->id)->get();

        // $tweet_array[]=array('id'=>'りんご', 'message'=>'もも', 'retweet_id'=>'なし');
        // $tweet_array[]=array('id'=>'りんご2', 'message'=>'もも2', 'retweet_id'=>'なし2');

        foreach($tweet as $my_tweet ){
            $tweet_array[]=array('id'=>$my_tweet->id, 'message'=>$my_tweet->message, 'created_at'=>$my_tweet->created_at, 'retweet_id'=>' 0');
        }
        foreach($make_retweet as $retweet){
            $tweet_array[]=array('id'=>$retweet->id, 'message'=>$retweet->MikeTweet->message, 'created_at'=>$retweet->created_at, 'retweet_id'=>' 1');
        }
        foreach($tweet_array as $key => $value) {
            $sort[$key] = $value['created_at'];
            
        }
        array_multisort($sort, SORT_ASC, $tweet_array);

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

