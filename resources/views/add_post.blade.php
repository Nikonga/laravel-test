@extends('parent_add_post')

@section('add_post_script')
    <form method="post" action="/create_post_in_db">
    {{ csrf_field() }}
    <span> Seple tetli</span>
    <input type="text" name="title">
    <span>xtex</span>
    <input type="text" name="text">
    <button>kk</button>
</form>

@foreach ($posts_all as $post)
   <p> title {{$post->title}}</p> <a href="/post_comment?post_id={{$post->id}}"> Check comments</a>

   <p> tetx  {{$post->text}} </p>
@endforeach
@endsection
