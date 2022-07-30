@extends('layouts.app')
@section('content')
<a href="{{ route('users.index') }}">Listagem de Usuários</a>
<br><br>

<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <label>Nome:</label>
    <input type="text" name="name">

    <br>

    <label>E-mail</label>
    <input type="email" name="email">

    <br>

    <button type="submit">Cadastrar</button>

</form>
@endsection