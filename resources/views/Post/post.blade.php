@extends('layouts.app')

@section ('content')

<h1>Blog</h1>


<?php
echo "Nombre: $post->title<br>";
echo "Descripción: $post->description<br>";
?>
@auth
<form method="GET" action="/post/{{$post->id}}/edit">
<input type="submit" value="Editar">
</form>

<form method="POST" action="/post/{{$post->id}}">
@csrf
@method('delete')
<input type="submit" value="eliminar">
</form>

@endauth
<form method="GET" action="/post">
<input type="submit" value="todos los post">
</form>

@endsection ()


