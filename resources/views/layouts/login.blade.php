<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <a href="/owners/login">Para empresas</a>
        <a href="/users/login">Para usuários</a>
    </header>

    <main>
        <h1>@yield('body-title')</h1>
        <form action="@yield('action')" method="post">
            @csrf
            @yield('fields')
            <button type="submit">Enviar</button>
            <p>
                <a href="/">Voltar</a>
            </p>
        </form>
    </main>

    <footer>
        ArmillaEACS &copy; 2023.
    </footer>
</body>
</html>