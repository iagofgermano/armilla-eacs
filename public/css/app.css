@extends('layouts.dashboard')

@section('title', 'HOME')
@section('profile', session('name'))
@section('content')


<div class="sidebar">
    <a href="/owners/{{session('name')}}/register/event"><u>Novo evento</u></a>
    <p>Meus eventos</p>
    <ul>
        @foreach($allEvents as $currentEvent)
        @if(!$currentEvent->active)
        <li class="inactive"><a href="/owners/{{session('name')}}/event/{{$currentEvent->id}}" style="color: red; margin-top:10px;">{{$currentEvent->name}}</a></li>
        @else
        <li><a href="/owners/{{session('name')}}/event/{{$currentEvent->id}}" style="color: #f0c200; margin-top:10px;">{{$currentEvent->name}}</a></li>
        @endif
        @endforeach
    </ul>
</div>
<div class="info">
@if(isset($event))
    <h2>{{ $event->name}} 
        @if ($event->active == 1) - Ativo 
        @else 
        <div class="evento-inativo"> - Inativo</h2> 
        @endif
    <br>   
    <div class="description">
    @if($event->description)
    Descrição do evento
    <hr class="event-hr">
    <div class="desc-event">{{$event->description}}</div></div>
    @endif
    <div class="status">
    @if ($event->active == 1)
    <br>
    <div class="numtags">Número de Tags: {{$tags}} <br></div>
    
    <div class="used-tags">Tags usadas: {{$usedTags}} <br></div>
    
    <div class="free-tags">Tags livres: {{$freeTags}} <br></div>
    
    <a href="/owners/{{session('name')}}/event/{{$event->id}}/inactivate">Inativar</a>
    @endif
    </p>
</div>


@endif
    </div>
@endsection