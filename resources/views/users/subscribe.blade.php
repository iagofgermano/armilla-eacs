@extends('layouts.dashboard')

@section('title', 'Ingressar em ' . $event->name)

@section('profile', session('username'))

@section('content')

<div class="info-user">
    <div class="description">
        {{$event->name}}
    <hr class="event-hr">
<div class="desc-event-u">
    @if($event->description)
        <p>
        {{$event->description}}
        </p>
    @endif
</div></div>
<div class="status-u">
    <hr class="event-hr">
    <p>
        Oferecido por: {{$owner}}
    </p>

    @if($event->active)
        <p>
            Vagas restantes: {{$wages}}
        </p>
            @if($isSubscribed == '1')
                <a href="/users/{{session('username')}}/events/{{$event->id}}/unsubscribe">Retirar-se</a>
            @else
                @if($wages != 0)
                    <a href="/users/{{session('username')}}/events/{{$event->id}}/subscribe">Inscrever-se</a>
                @endif
            @endif
    @else
        <h3>Este evento não está mais disponível</h3>
    @endif
    <a href="/users/{{session('username')}}">Voltar</a>
</div>
@endsection