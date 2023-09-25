@extends('layouts.dashboard')

@section('title', 'HOME')
@section('profile', session('username'))

@section('content')


<p>Eventos disponíveis</p>
<ul>
    @foreach ($unsubscribedEvents as $event)
        <li><a href="/users/{{session('username')}}/events/{{$event->id}}">{{$event->name}}</a></li>
    @endforeach
</ul>

<p>Eventos em que estou cadastrado</p>
<ul>
    @foreach ($subscribedEvents as $event)
        <li><a href="/users/{{session('username')}}/events/{{$event->id}}">{{$event->name}}</a></li>
    @endforeach
</ul>


@endsection