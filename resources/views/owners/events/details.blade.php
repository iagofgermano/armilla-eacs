<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link rel="icon" type="image/png" href="/img/favicon.png" class="favicon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar">
          <a href="/"><img src="/img/logo-1.png" class="navlogo"></a>
          <ul class="nav-links">
          <li><h3>{{session('name')}}</h3></li>
          <li><a href="/owners/logout">Logout</a></li>
          </ul>
          <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </nav>
      </header>
      <div id="details">

      </div>
    <footer>
        ArmillaEACS &copy; 2023.
    </footer>
    <script>
        setInterval(() => {
            $.ajax({url: '/api/{{session("name")}}/events/{{$event_id}}', success: function(result){
                $('#details').html(result);
            }});
        }, 1500);

    </script>
</body>
</html>