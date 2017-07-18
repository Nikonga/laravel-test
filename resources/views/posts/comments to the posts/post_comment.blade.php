<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/create_comment">
    <span>В принципе, ты можешь оставить комментарий</span>
    <input type="hidden" name="post_id" value="{{$post_id}}">
    <input type="text" name="comment">
    <button>Send</button>
</form>

<p>{{$posts->text}}</p>
<div style="margin:20px">
@foreach($comments as $comment)

    <p>{{$comment->text}}</p>
    @endforeach
</div>
</body>
</html>