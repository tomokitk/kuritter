<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Follow;
class FollowController extends Controller
{
    public function follow(Request $request){
    
    if($request->follow_unfollow=="follow"){
        $follow = new Follow();
        $user=Auth::user();
        $follow->from_user_id=$user->id;
        $follow->to_user_id=$request->id;
        $follow->save();
   
    }else if($request->follow_unfollow=="unfollow"){
        //dd($request->id);
        $user=Auth::user();
        $break=Follow::where('from_user_id',$user->id)->where('to_user_id',$request->id);//->post();//->delete();
        $break->delete();
    }
    $users=User::all();
    $user=Auth::user();
    $follow=Follow::all();

    return view('user_list')->with('users',$users)
                            ->with('my_id',$user)
                            ->with('follow',$follow);
                            
    
 
}   
}


//$break= Follow ::findOrFail($follow->id);
  ////      $break=delete();