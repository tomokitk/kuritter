<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>User_List</title>
</head>
<body>
<a href="{{url('/home')}}"class ="header-menu">Back To Home</a>
<h1>Users_list</h1>

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
