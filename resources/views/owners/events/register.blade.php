@extends('layouts.dashboard')

@section('title', 'HOME')
@section('profile', session('name'))

@section('content')
<p>
    <a href="/owners/logout">Logout</a>
    <a href="/owners/{{session('name')}}">Voltar</a>
</p>

<p>
    <form action="/owners/register/event" method="post">
        @csrf
        <p>
            <label for="name">Nome do evento</label>
            <input type="text" name="name" id="name" required>
        </p>
        <p>
            <label for="description">Descrição</label>
            <textarea name="description" id="description" cols="20" rows="5"></textarea>
        </p>
        <p>
            <label for="numberOfTags">Quantidade de pessoas (Máx.: {{$tagsAvailable}})</label>
            <input type="number" name="numberOfTags" id="numberOfTags" max="{{$tagsAvailable}} required">
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</p>
@endsection