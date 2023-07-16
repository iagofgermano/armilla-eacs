@extends('layouts.dashboard')

@section('title', $event->name)
@section('profile', session('name')) 

@section('content')

<p>
    <a href="/owners/{{session('name')}}">Voltar</a>
</p>

Nome: {{ $event->name}}
<br>   
<p>
@if ($event->description)
<p>
Descrição do evento:
{{$event->description}}</p>
@endif
<p>
@if ($event->active == 1)
Status: Ativo
<br>
Número de Tags: {{$tags}} <br>
Tags usadas: {{$usedTags}} <br>
Tags livres: {{$freeTags}} <br>
<a href="/owners/{{session('name')}}/event/{{$event->id}}/inactivate">Inativar</a>
@else
status: Inativo
@endif
</p>

@endsection