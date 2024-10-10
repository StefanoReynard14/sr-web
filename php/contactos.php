<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/srWeb.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Contacto</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <nav class="navbar bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="../index.html">
                <img class="imagen" src="../images/srWeb.png" alt="srWeb">
              </a>
            </div>
          </nav>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item link-devices">
                <a class="nav-link" href="../index.html">Inicio</a>
              </li>
              <li class="nav-item link-devices">
                <a class="nav-link" href="../index.html#sobremi">Sobre mi</a>
              </li>
              <li class="nav-item link-devices">
                <a class="nav-link" href="../index.html#habilidades">Habilidades</a>
              </li>
              <li class="nav-item link-devices">
                <a class="nav-link" href="#contacto">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main class="mainlogin">
        <div class="login-container">
            <h2>Contacto</h2>
            <form method="POST" id="contactForm" data-aos="fade" data-aos-duration="1500">
                <input type="text" name="name" placeholder="Nombre completo">
                <input type="text" name="email" placeholder="Email">
                <textarea name="mensaje" placeholder="Mensaje"></textarea>
                <button type="submit" name="submit">Enviar Datos</button>
            </form>
        </div>
    </main>

    <footer>
  <div class="footer-container">
    <!-- Columna 1: Redes Sociales -->
    <div class="foot">
      <h3>Redes Sociales</h3>
      <ul class="footul">
        <li><a href="https://www.instagram.com/web.sr_/" target="_blank">Instagram</a></li>
        <li><a href="https://www.linkedin.com/in/stefano-reynard-00691529b/" target="_blank">LinkedIn</a></li>
        <li><a href="https://wa.me/5493484343711" target="_blank">Whatsapp</a></li>
      </ul>
    </div>

    <!-- Columna 2: Información de Contacto -->
    <div class="foot">
      <h3>Contacto</h3>
      <ul class="footul">
        <li>Email: bizzmajordev@gmail.com</li>
        <li>Teléfono: +54 9 348 4343711</li>
      </ul>
    </div>

    <!-- Columna 3: Enlaces Adicionales -->
    <div class="foot">
      <h3>Enlaces</h3>
      <ul class="footul">
        <li><a href="../index.html#inicio">Inicio</a></li>
        <li><a href="../index.html#sobremi">Sobre mi</a></li>
        <li><a href="../index.html#habilidades">Habilidades</a></li>
        <li><a href="./contactos.php">Contacto</a></li>
      </ul>
    </div>
  </div>
</footer>



    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

<?php include("registro.php"); ?>
</body>


</html>
