@extends('layouts.app')

@section ('title', 'Users')


@section ('content')

<h1>Usuarios</h1>

<table class="table">
    <thead>

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Mail</th>
            <th>Rol</th>

        </tr>
    </thead>

    <tbody>

        @foreach ($users as $user)
        <tr>
        <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->is_admin}}</td>
        </tr>

        @endforeach

    </tbody>
</table>

@endsection ()