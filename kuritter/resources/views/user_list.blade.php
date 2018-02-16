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

    @if(isset($user->follow))
    <?php $NotFollow = false; ?>
      @foreach($user->follow as $follow)
        @if($my_id->id==$follow->to_user_id)      

            <?php $NotFollow = true; ?>
                <input type="submit" name="follow_unfollow" value="unfollow">
        @break
        @endif

      <?php ///このあとから条件分岐の続きとcontllerに変更を加える。フォローのボタン表示切り替えを完成させる20180216?>

        @endforeach
        @if($NotFollow==false)
        <input type="submit" name="follow_unfollow" value="follow">
        @endif
            
        <input type="hidden" name="id" value="{{$user->id}}">
    @endif   
    </form>
    
        
    @endforeach


    </body>
    </html>
