<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Tweet</title>
</head>
<body>
<h1>tweet</h1>
    <form method="post" action="{{ url('/store') }}">
  {{ csrf_field() }}
  <p>
    <textarea name="message" placeholder="message">{{ old('message') }} </textarea>
    @if ($errors->has('message'))
    <span class="error">{{ $errors->first('message') }}</span>
    @endif
  </p>
  
  <p>
    <input type="submit" value="Add">
  </p>
     </form>


</body>
</html>
