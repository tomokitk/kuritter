<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>User_List</title>
</head>
<body>
<h1>User_List</h1>

@foreach($users as $user)
<form method="post" action="{{ url('/follow') }}">
{{ csrf_field() }}

    <p>{{$user->name}}</p>
    <input type="hidden" name="id" value="{{$user->id}}">
    <input type="submit" name="follow_unfollow" value="follow">
    <input type="submit" name="follow_unfollow" value="unfollow">
</form>
@endforeach


</body>
</html>
