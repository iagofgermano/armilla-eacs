@extends('layouts.dashboard')

@section('title', 'HOME')
@section('profile', session('name'))
@section('content')

<div class="sidebar">
    <a href="/owners/{{session('name')}}/register/event">Novo Evento</a>
</div>
<div class="sidebar">
    <u>Meus Eventos</u>
    <ul>
        @foreach($allEvents as $event)
        <li><a href="/owners/{{session('name')}}/event/{{$event->id}}" style="color: red; margin-top:10px;">{{$event->name}}</a>

        @if(!$event->active)
        (Inativo)
        @endif
        </li>
        @endforeach
    </ul>
</div>
@if(isset($event))
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


@endif
    </div>
@endsection