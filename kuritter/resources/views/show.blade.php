<h1>
  <a href="{{url('/home')}}"class ="header-menu">Back</a>
  TIME-LINE
  </h1>
  

  @foreach($mike_tweets,$likes) as [$mike_tweet,$like])
  <form method="post" action="{{ url('/like')}}">
    {{ csrf_field() }}
    <P>{{ old('message', $mike_tweet->message) }}</p>
    
    @if(count($like) === 1)
  　<input type="submit" name="submit_value"     value="like"> 
    @elseif(count($like) > 1)
    <input type="submit" name="submit_value"     value="unlike">
    @endif
    <input type="submit" name="submit_value"     value="delete">
    <input type="hidden" name="message_id"       value="{{$mike_tweet->id}}">
    
  


  </form>
  @endforeach


