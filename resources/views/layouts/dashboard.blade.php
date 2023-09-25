<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-l22Up6v3U6dQOik9J4RgtG8GVvswbvN6UwT6Tb+6zYSv6q3dCQ/9X4vjRIV8sNxbU+/SPmxFYwm7GhCcWQ2L7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="navbar">
          <a class="logo" href="#">ArmillaEACS</a>
          <ul class="nav-links">
          <li><h3>@yield('profile')</h3></li>
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
    @yield('content')
    <footer>
        ArmillaEACS &copy; 2023.
    </footer>
</body>
</html>