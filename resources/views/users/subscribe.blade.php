@extends('layouts.dashboard')

@section('title', 'Ingressar em ' . $event->name)

@section('profile', session('username'))

@section('content')

    <a href="/users/{{session('username')}}">Voltar</a>

    <p>
        Nome do evento: {{$event->name}}
    </p>

    @if($event->description)
        <p>
            Descrição: {{$event->description}}
        </p>
    @endif

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


@endsection