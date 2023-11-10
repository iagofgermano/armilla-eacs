@foreach ($event_details as $event_detail)
    <p>
        [{{$event_detail->created_at->format('d/m/Y H:m:s')}}] Usuário <u class="users-name">{{$event_detail->username}}</u> no evento <u class="evento-nome">{{$event_detail->event_name}}</u> - Tag Serial: <u>{{$event_detail->tag_name}}</u> <u class="id-tag"> ID:{{$event_detail->tag_id}}</u> - 
        @if ($event_detail->type == '1')
            <p class="entry"> ENTRADA</p>
        @else
        <p class="exit"> SAÍDA</p>
        @endif
    </p>
@endforeach