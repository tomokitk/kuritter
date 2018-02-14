

<h1>
  <a href="{{url('/home')}}"class ="header-menu">Back</a>
  TIME-LINE
  </h1>
  
  
  @foreach($mike_tweets as $mike_tweet)
    
  
  <form method="post" action="{{ url('/like')}}">
    {{ csrf_field() }}
  
    <P>{{ old('message',$mike_tweet->message) }}</p>
    
    @if(!empty($mike_tweet->like))
     
    @foreach($mike_tweet->like as $like)
        $mylike = false;
        @if()
    @if($mike_tweet->id==$like->message_id)
    <input type="submit" name="submit_value"     value="unlike">
    @break
  
    
     @endif
    @endforeach

    @else
    <input type="submit" name="submit_value"     value="like">

    @endif
    <input type="submit" name="submit_value"     value="delete">
    <input type="hidden" name="message_id"       value="{{$mike_tweet->id}}">
     
     
  </form>
     
     
  @endforeach



  
  <?php 
  //  if(!empty($mike_tweet->like)){
   //   foreach($mike_tweet->like as $likeData){
    //  echo $likeData->user_id."/";

  //    }
    //  echo "\n";
      //if(isset($user)){
       // echo "ユーザーID".$user->id;
        //echo "\n";
        //if( $mike_tweet->isMyLike($user->id)){
         // echo "true";
         // echo "\n";
       // }
     // }
   // }

  
    

     //@if($mike_tweet->id==$like->message_id)
    
    // <input type="submit" name="submit_value"     value="unlike">
     //@else
   // <input type="submit" name="submit_value"     value="like"> 
    // @break
     //@endif
    //@endforeach
   // <input type="submit" name="submit_value"     value="delete">
   // <input type="hidden" name="message_id"       value="{{$mike_tweet->id}}">
     
     
 // </form>
     
     
  //@endforeach

  

