@extends ('layouts.app')

@section('content')

<h1>Editar Post</h1>

<form method='POST' action="/post/{{$post->id}}">
@csrf
@method('patch')
<p>Titulo: <input required type="text" name="title" value="{{$post->title}}"> </p>
<p>Descripción: <input type="text" name="description"value="{{$post->description}}"> </p>
<input type="submit" value="Editar">
</form>

@endsection ('content')