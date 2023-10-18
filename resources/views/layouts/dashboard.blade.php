<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>
<body>
    <header>
        <nav class="navbar">
          <img src="/img/logo.png"><a class="logo" href="/">ArmillaEACS</a>
          <ul class="nav-links">
          <li><h3>@yield('profile')</h3></li>
          <li><a href="/owners/logout">Logout</a></li>
          </ul>
          <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </nav>
      </header>
<body>
    @yield('content')
    <footer>
        ArmillaEACS &copy; 2023.
    </footer>
</body>
</html>