@extends('layouts.app')

@section ('title', 'Blog')


@section ('content')

<h1>Blog</h1>

@auth
<a href="/post/create">crear post</a> <br>
@endauth

@foreach ($posts as $post)
<li> {{$post->title}}
    <form method="GET" action="/post/{{$post->id}}">
        <input type="submit" value="Mostrar">
    </form>
</li>
@endforeach


@endsection ()