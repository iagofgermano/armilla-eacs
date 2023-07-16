@extends('layouts.dashboard')

@section('title', 'HOME')
@section('profile', session('username'))

@section('content')
<a href="/users/logout">Logout</a>

<p>Eventos disponíveis</p>
<ul>
@foreach ($events as $event)
<li><a href="/users/{{session('username')}}/events/{{$event->id}}">{{$event->name}}</a></li>
@endforeach
</ul>
@endsection