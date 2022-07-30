@extends('layouts.app')
@section('content')
<a href="{{ route('users.create') }}">Novo Usuário</a>
<br><br>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection