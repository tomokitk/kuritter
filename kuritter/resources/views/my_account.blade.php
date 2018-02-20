<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>My Account</title>
</head>
<body>
<h1><a href="{{url('/home')}}"class ="header-menu">Back</a>
  My Account 
</h1>

@foreach($tweet as $tweet)

    @if($tweet->user_id==$my_id->id)
        <P>{{ old('message',$tweet->message) }}</p>
    @endif
@endforeach

<p>
      







</p>


</body>
</html>



