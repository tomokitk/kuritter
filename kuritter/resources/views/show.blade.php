<h1>
  <a href="{{url('/')}}"class ="header-menu">Back</a>
  New Post
  </h1>
  @foreach($mike_tweets as $mike_tweet)
  <p>
    <textarea name="message" placeholder="message"> {{ old('message', $mike_tweet->message) }}</textarea>
  </p>
  @endforeach
</form>

