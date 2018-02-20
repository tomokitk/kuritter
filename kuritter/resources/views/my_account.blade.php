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
@foreach($tweet as $tweet)
    @if($tweet->user_id==$my_id->id)
        <P>{{ old('message',$tweet->message) }}</p>
        <!-- <form method="post" action="{{ url('/like')}}">
        {{ csrf_field() }} -->
        <input type="submit" name="submit_value"     value="delete">

    @endif
@endforeach

</body>
</html>