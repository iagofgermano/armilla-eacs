<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"ArmillaEACS - Login"</title>
    <link rel="stylesheet" type="text/css" href="/css/login.css">
</head>
<body>
    <header>
        <nav class="navbar">
          <a class="logo" href="/">ArmillaEACS</a>
          <ul class="nav-links">
            <li><a href="/owners/login">Para empresas</a></li>
            <li><a href="/users/login">Para usuários</a></li>
          </ul>
          <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </nav>
      </header>

    <main>
        <section class="login-form">
            <div class="login-box">
            <form action="@yield('action')" method="post">
            <h2>@yield('body-title')</h2>
            @csrf
            <div class="user-box">
            @yield('fields')
            </div>
            <center>
            <button class="btn" type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Iniciar
            </form>
        </button></center>

    </div>
</section>
</main>
    <footer>
        <div class="container">
        <p>&copy; 2023 ArmillaEACS - Early Access Control System</p>
        </div>
    </footer>
</body>
</html>