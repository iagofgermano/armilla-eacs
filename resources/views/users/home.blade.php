<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link rel="icon" type="image/png" href="/img/favicon.png" class="favicon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>
<body>
    <header>
        <nav class="navbar">
                <a href="/"><img src="/img/logo-1.png" class="navlogo"></a>
          <ul class="nav-links">
          <li><h3>{{session('username')}}</h3></li>
          <li><a href="/users/logout">Logout</a></li>
          </ul>
          <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </nav>
      </header>
<body>
<div class="info-user">
<div class="description">Eventos disponíveis
<hr class="event-hr">
<div class="desc-event">
    @foreach ($unsubscribedEvents as $event)
    <a href="/users/{{session('username')}}/events/{{$event->id}}">{{$event->name}}</a>
    @endforeach

</div></div>
<hr class="event-hr">
<div class="status">Eventos em que estou cadastrado
<hr class="event-hr">
<div class="desc-event">
    @foreach ($subscribedEvents as $event)
        <a href="/users/{{session('username')}}/events/{{$event->id}}">{{$event->name}}</a>
    @endforeach
</div>
</div></div>

<footer>
    ArmillaEACS &copy; 2023.
</footer>
</body>
</html>