<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MikeTweet;
use App\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{ 



 public function like(Request $request){
    $like = new like();
    $user=Auth::user();
    $like->message_id=$request->message_id;
    $like->user_id=$user->id;
    $like->save();
    $tweet=MikeTweet::all();
    return view('show')->with('mike_tweets',$tweet);
 }

 
}


////新しいやつ



 //$users = User::where("id","!=",$user->id)->get();
    
    
    //public function like(Request $request){
    //$like = new Like ();
    //$user=Auth::user(); // ログインしているidを取っている
    //$message=MikeTweet::where("id","!=",$user->id)->get();
    //$tweet->message=$request->message;
    //$like->user_id=$user->id;
    //$like->message=$request->message;
    //$like-> save();
    //return redirect('like');
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //public function show(){

        //$shows=MikeTweet::all();
        //return view('show')->with('mike_tweets',$shows);
   // }
    
    //public function like(Request $request){
    //$like = new Like ();
    //$user=Auth::user(); // ログインしているidを取っている
    //$message=MikeTweet::where("id","!=",$user->id)->get();
    //$tweet->message=$request->message;
    //$like->user_id=$user->id;
    //$like->message=$request->message;
    //$like-> save();
    //return redirect('like');


    ///like に何も入っていないのに呼ぶからエラーが出る。

//public function store(Request $request){
  //  $tweet = new MikeTweet ();
    //$user=Auth::user(); // ログインしているidを取っている
    //$tweet->user_id=$user->id;
    //$tweet->message=$request->message;
    //$tweet-> save();
    //eturn redirect('show');  ///show に飛ばす


     
    //::where("id","!=",$user->id)->get();
    //$Like = new MikeTweet ();
    //$Like=Auth::user(); // ログインしているidを取っている
    //$message_id=MikeTweet::id(); // ログインしているidを取っている
    //$Like->message_id=$id->id;
    //$tweet->message=$request->message;
    //$Like-> save();
    // return redirect('/')