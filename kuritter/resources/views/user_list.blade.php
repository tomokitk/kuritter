<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>User_List</title>
</head>
<body>
<h1>User_List</h1>

@foreach($users as $user)
<p>{{$user->name}}</p>
@endforeach
</form>

</body>
</html>
