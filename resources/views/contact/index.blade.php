@extends('layouts.app')

@section ('title', 'Contact')


@section ('content')

<h1>Contactos</h1>



@foreach ($contacts as $contact)
<li> {{$contact->name. $contact->email}}
    <form method="GET" action="/contact/{{$contact->id}}">
        <input type="submit" value="Mostrar">
    </form>
</li>
@endforeach


@endsection ()