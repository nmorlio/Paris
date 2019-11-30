@extends('layouts.app')

@section ('content')

<h1>Contact</h1>


<?php
echo "Nombre: $contact->name<br>";
echo "Email: $contact->email<br>";
echo "Subjet: $contact->subjet<br>";
echo "Content: $contact->content<br>";

?>
@auth
<form method="GET" action="/contact/{{$contact->id}}/edit">
<input type="submit" value="Editar">
</form>

<form method="POST" action="/contact/{{$contact->id}}">
@csrf
@method('delete')
<input type="submit" value="eliminar">
</form>

@endauth
<form method="GET" action="/contact">
<input type="submit" value="ver todos los contactos">
</form>

@endsection ()