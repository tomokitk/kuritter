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

@foreach($tweet_arrays as $key =>$value)
<ul>
    <li>
        <?php //echo "{$value['id']}"; ?>

        <?php echo "{$value['message']}"; ?>

        <?php //echo "{$value['created_at']}"; ?>

        <?php echo "{$value['retweet_id']}"; ?>
    </li>
</ul>

@endforeach



</body>
</html>