@extends('layouts.dashboard')

@section('title', 'HOME')
@section('profile', session('name'))

@section('content')
<p>
    <a href="/owners/logout">Logout</a>
    <a href="/owners/{{session('name')}}/register/event">Novo Evento</a>
</p>
<p>
    Meus Eventos
    <ul>
        @foreach($events as $event)
        <li><a href="/owners/{{session('name')}}/event/{{$event->id}}">{{$event->name}}</a>

        @if(!$event->active)
        (Inativo)
        @endif
        </li>
        @endforeach
    </ul>
</p>
@endsection