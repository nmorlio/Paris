@extends ('layouts.app')

@section('content')

<h1>Editar Contacto</h1>

<form method='POST' action="/contact/{{$contact->id}}">
@csrf
@method('patch')
<p>Titulo: <input required type="text" name="name" value="{{$contact->name}}"> </p>
<p>Descripción: <input type="text" name="email"value="{{$contact->email}}"> </p>
<input type="submit" value="Editar">
</form>

@endsection ('content')