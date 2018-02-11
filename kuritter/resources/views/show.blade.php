<h1>
  <a href="{{url('/')}}"class ="header-menu">Back</a>
  New Post
  </h1>
  

  @foreach($mike_tweets as $mike_tweet)
  <form method="post" action="{{ url('/like')}}">
    {{ csrf_field() }}
    <P>{{ old('message', $mike_tweet->message) }}</p>
    
    
  　<input type="submit" name="submit_value"    value="like"> 
    <input type="submit" name="submit_value"    value="unlike">
    <input type="submit" name="submit_value"    value="delete">
    <input type="hidden" name="message_id" value="{{$mike_tweet->id}}">
    
  


  </form>
  @endforeach


