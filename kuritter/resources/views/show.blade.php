

<h1>
  <a href="{{url('/home')}}"class ="header-menu">Back</a>
  TIME-LINE
  </h1>
  
  
  @foreach($mike_tweets as $mike_tweet)  
  <form method="post" action="{{ url('/like')}}">
    {{ csrf_field() }}

    <P>{{ old('message',$mike_tweet->message) }}</p>
  
    @if(isset($mike_tweet->like))
      <?php $NotLike = false; ?>
      @foreach($mike_tweet->like as $like)
        @if($my_id->id==$like->user_id)

        <?php $NotLike = true; ?>
          <input type="submit" name="submit_value"     value="unlike">
          <!-- unlike-->
          @break
        @endif
      @endforeach
      @if($NotLike==false)
      <input type="submit" name="submit_value"     value="like">
      <!-- like1-->
      @endif
    @else
    <input type="submit" name="submit_value"     value="like">
    <!-- like2-->
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

  

