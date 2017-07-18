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
<span> в принципе, можешь остановить свои пожелания </span>
<input type ='text' name='comment'>
<button> Send </button>
</form>
<div>
    @foreach ($comments_all as $comment)
        #<p> Name {{$comment->name}}</p>

        <span> tetx  {{$comment->text}} </span>
        <p> post_id  {{$comment->post_id}} </p>
    @endforeach

</div>

</body>
</html>