@extends('layouts.dashboard')

@section('title', 'HOME')
@section('profile', session('name'))

@section('content')

<main class="registro-evento">
    <form action="/owners/register/event" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome do evento</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" cols="20" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="numberOfTags">Quantidade de pessoas (Máx.: {{$tagsAvailable}})</label>
            <input type="number" name="numberOfTags" id="numberOfTags" max="{{$tagsAvailable}} required">
        </div>
        <div class="form-group">
            <center><input type="submit" value="Enviar">
            <a href="/owners/{{session('name')}}">Voltar</a></center>
        </div>
    </form>
</main>
@endsection