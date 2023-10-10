@extends('layouts.dashboard')

@section('title', 'Tag')
@section('profile', session('username'))

@section('content')
<div class="info-user">
<h2>CADASTRO FEITO COM SUCESSO!!!</h2>
<hr class="hr-event">
<div class="status">
<p>
    TAG: {{$tag->id}}
</p>
<p>
    <a href="/users/{{session('username')}}">Voltar</a>
</p>
</div></div>
@endsection