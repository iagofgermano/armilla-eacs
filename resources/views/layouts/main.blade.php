<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('ArmillaEACS - Entry Access Control System<')</title>
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-l22Up6v3U6dQOik9J4RgtG8GVvswbvN6UwT6Tb+6zYSv6q3dCQ/9X4vjRIV8sNxbU+/SPmxFYwm7GhCcWQ2L7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="navbar">
          <a class="logo" href="#">ArmillaEACS</a>
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
        <section class="hero">
          <div class="container">
            <h2>Controle de Fluxo de Pessoas em Eventos</h2>
            <p>Com a ArmillaEACS, gerencie o acesso de visitantes, controle vendas e estoque e crie uma experiência personalizada para seus clientes.</p>
            <a href="#zap" class="btn">Experimente Agora</a>
          </div>
        </section>
        <section class="features">
          <div class="container">
            <h3>Recursos Principais</h3>
            <ul>
              <li><i class="fas fa-check"></i> Controle de fluxo de pessoas</li>
              <li><i class="fas fa-check"></i> Controle de vendas e estoque</li>
              <li><i class="fas fa-check"></i> Sistema de créditos na pulseira RFID</li>
              <li><i class="fas fa-check"></i> Experiência personalizada para os visitantes</li>
            </ul>
          </div>
        </section>
        <section class="cta">
          <div class="container">
            <h3>Experimente Agora</h3>
            <p>Entre em contato para adquirir o sistema ArmillaEACS para o seu evento.</p>
            <a href="https://api.whatsapp.com/send?phone=+5516993220875&text=Ol%C3%A1%21%20Queria%20conhecer%20os%20produtos%20Armilla." class="btn" target="_blank" id="zap">
<i class="fa fa-whatsapp"></i> Entre em contato</a>
          </div>
        </section>
            </form>
          </div>
        </section>
      </main>
      </style>

<footer>
    <div class="container">
      <p>&copy; 2023 ArmillaEACS - Early Access Control System</p>
    </div>
  </footer>           
  <script>
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        const target = document.querySelector('.scroll');
        if (scrollPosition > 200) {
            target.classList.add('js-scroll');
        } else {
            target.classList.remove('js-scroll');
        }
    });
</script>
</body>
</html>