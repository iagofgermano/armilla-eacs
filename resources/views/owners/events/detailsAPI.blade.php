@foreach ($event_details as $event_detail)
    <p>
        [{{$event_detail->created_at}}] Usuário {{$event_detail->username}} no evento {{$event_detail->event_name}} - Tag {{$event_detail->tag_name}} - 
        @if ($event_detail->type == '1')
            ENTRADA
        @else
            SAÍDA
        @endif
    </p>
@endforeach