<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Follow;

class FollowController extends Controller
{
    public function follow(Request $request){
        
        $follow = new Follow();
        $user=Auth::user();
        $follow->from_user_id=$user->id;
        $follow->to_user_id=$request->id;
        $follow->save();
        $follow=Follow::all();
        return redirect('user');


 }
}
