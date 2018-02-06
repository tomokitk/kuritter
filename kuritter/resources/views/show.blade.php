<h1>
  <a href="{{url('/')}}"class ="header-menu">Back</a>
  New Post
  </h1>
  <form method="post" action="{{ url('/like')}}">
  {{ csrf_field() }}

  @foreach($mike_tweets as $mike_tweet)

  <textarea name="message" placeholder="message"> {{ old('message', $mike_tweet->message) }}</textarea>
  
  <input type="submit" value="like">
  
  <input type="hidden" name="message_id" value="{{$mike_tweet->id}}">

  @endforeach

</form>



  
  