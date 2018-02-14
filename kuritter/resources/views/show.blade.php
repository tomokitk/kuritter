

<h1>
  <a href="{{url('/home')}}"class ="header-menu">Back</a>
  TIME-LINE
  </h1>
  
  
  @foreach($mike_tweets as $mike_tweet)
    
  
  <form method="post" action="{{ url('/like')}}">
    {{ csrf_field() }}
  
    <P>{{ old('message',$mike_tweet->message) }}</p>
    @foreach($likes as $like)
     @if($mike_tweet->id==$like->message_id)
     <input type="submit" name="submit_value"     value="unlike">
     @else
    <input type="submit" name="submit_value"     value="like"> 
     @endif
     
    <input type="submit" name="submit_value"     value="delete">
    <input type="hidden" name="message_id"       value="{{$mike_tweet->id}}">
     @break
     
  </form>
     
  @endforeach    
  @endforeach

  

