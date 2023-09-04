@extends('layouts.dashboard')

@section('title', 'Tag')
@section('profile', session('username'))

@section('content')
<h2>CADASTRO FEITO COM SUCESSO!!!</h2>
<p>
    Sua tag: {{$tag->id}}
</p>
<p>
    <a href="/users/{{session('username')}}">Voltar</a>
</p>
@endsection