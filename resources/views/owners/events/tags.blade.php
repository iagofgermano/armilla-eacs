@extends('layouts.dashboard')

@section('title', 'tags do evento')
@section('profile', session('name')) 

@section('content')
<h2>
    EVENTO CRIADO!!!
</h2>

Tags utilizadas no evento:
@foreach($tags as $tag)
<span>
    {{$tag->id}}
</span>
@endforeach
<p>
    <a href="/owners/{{session('name')}}">Voltar</a>
</p>

@endsection