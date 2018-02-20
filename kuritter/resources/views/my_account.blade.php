<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>My Account</title>
</head>
<body>
<h1><a href="{{url('/home')}}"class ="header-menu">Back</a>
  My Account 
  <p>アカウント名 :{{$my_id->name}}</p>

</h1>

<h2>~my_tweet~</h2>
@foreach($mike_tweets as $mike_tweet)


    @if($mike_tweet->user_id==$my_id->id)
        <P>{{ old('message',$mike_tweet->message) }}</p>
        
        <!-- <form method="post" action="{{ url('/like')}}">
        {{ csrf_field() }} -->

    @endif
    
@endforeach
<?php //$make_retweets as $make_retweet はasの前を後に別の変数として代入して使っているから、同じではだめ ?>
@foreach($make_retweets as $make_retweet)
<p>{{$make_retweet->MikeTweet->message}}</p>
 
@endforeach
@foreach($tweet_arrays as $key =>$value)
<?php echo "{$value['id']}"; ?>

<?php echo "{$value['message']}"; ?>

<?php echo "{$value['retweet_id']}"; ?>
@endforeach



</body>
</html>