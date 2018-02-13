<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet; 
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{  public function show(Request $request){
    $tweet = new MikeTweet ();
    $user=Auth::user(); // ログインしているidを取っている
    $tweet->user_id=$user->id;
    $tweet->message=$request->message;
    $tweet-> save();
    $tweet=MikeTweet::all();
    return view('show')->with('mike_tweets',$tweet);
 }
    
     

    //public function timeline(Request $request){

    //$tweet=MikeTweet::all();
    //return view('show');



//}









}




  
///tweetcontroller のstore メソッドと一緒のもんを書けばいい。

////User::where("id","!=",$user->id)->get();

////public function delete(Request $request) {
    ////$break = MikeTweet::findOrFail($id);
    ////$break->delete($id);
    ///$breal->save();
    ///$tweet=MikeTweet::all();
    ///return view('show')->with('mike_tweets',$tweet);
    ////}