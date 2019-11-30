@extends('layouts.app')

@section ('content')

<h1>Blog</h1>


<form method="POST" action="/post">
    @csrf
    <label>Titulo:</label>
    <input type="text" name="title">
    <br>
    <label>Texto:</label>
    <textarea type="textarea" name="description"> </textarea>
    <br>

<input type="submit" value="Guardar">
</form>
<form method="GET" action="/post">
    <input type="submit" value="Lista de post">
</form>

@endsection ()
    