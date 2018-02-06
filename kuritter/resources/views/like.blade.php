<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>User_List</title>
</head>
<body>
<form>
<h1>
  <a href="{{url('/')}}"class ="header-menu">Back</a>
</h1>
  @foreach($likes as $like)
  <p>
    <textarea > </textarea>
  </p>
  @endforeach
</form>

</body>
</html>

