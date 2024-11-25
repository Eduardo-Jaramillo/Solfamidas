<?php
    $array = array();
    $dupe = false;
    $added = false;
    $amount = 0;

    if (!empty($_COOKIE["carrito"])) {
        $array = json_decode($_COOKIE["carrito"]);
        $amount = $_COOKIE["quantity"];
        if (!empty($_POST["instrumentos"])) {
            $intrumento = array_keys($_POST["instrumentos"])[0];
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i][0] == $intrumento) {
                    if ($array[$i][1] == $_POST["instrumentos"][$intrumento]) {
                        $dupe = true;
                        $array[$i][2]++;
                        $added = true;
                        setcookie("carrito", json_encode($array), time() + (86400 * 30), "/");
                        $amount++;
                        setcookie("quantity", $amount, time() + (86400 * 30), "/");
                    }
                }
            }
        }
    }

    if (!empty($_POST["instrumentos"])) {
        if (!$dupe) {
            $intrumento = array_keys($_POST["instrumentos"])[0];
            $array[] = array($intrumento, $_POST["instrumentos"][$intrumento], 1);
            setcookie("carrito", json_encode($array), time() + (86400 * 30), "/");
            $amount++;
            setcookie("quantity", $amount, time() + (86400 * 30), "/");
            $added = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solfamidas | Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos/general.css">
  <link rel="stylesheet" href="estilos/blog.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <style>
    main img {
      height: 20em;
    }
  </style>
</head>

<body>
  <header class="header">
    <div><a href="landing.html"><img src="img/logo.jpeg" alt="Logo de Solfamidas"></a></div>
    <div class="header-title">
      <h1><span class="solfamidas">Solfamidas</span> <br>High School Musical</h1>
    </div>
    <div></div>
  </header>
  <div>
    <nav>
      <button class="menu-toggle">&#9776; Menu</button>
      <ul class="nav-links">
        <li><a href="landing.html">Home</a></li>
        <li><a href="sobreNosotros.html">Sobre Nosotros</a></li>
        <li><a href="profesores.html">Profesores</a></li>
        <li><a href="clases.php">Clases</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="inicioSesion.php">Iniciar Sesión</a></li>
        <li>
          <a href="carrito.php">
            <button type="button" class="btn position-relative">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="30"
                height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 17h-11v-14h-2" />
                <path d="M6 5l14 1l-1 7h-13" />
              </svg>
              <span id="counter"
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <span id="cantidad-carrito">0</span>
                <span class="visually-hidden">
                  unread messages
                </span>
              </span>
            </button>
          </a>
        </li>
      </ul>
    </nav>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function () {
        // Toggle menu display on click
        $('.menu-toggle').click(function () {
          $('.nav-links').toggleClass('show');
        });
      });
    </script>
    <main class="container-fluid">
      <div class="row mx-2 justify-content-around mt-4 <?php if (!$added) { print " d-none"; }?>">
        <div class="col-12">
          <div class="alert alert-success text-center" role="alert">
            <?php if ($added) {print "Añadido al carrito exitosamente!";} ?>
          </div>
        </div>
      </div>
      <div class="row mx-2 justify-content-around">
        <div class="col-auto my-4">
          <div class="card" style="width: 18rem;">
            <img src="img/item-piano.png" class="card-img-top p-4" alt="piano">
            <div class="card-body">
              <h5 class="card-title">Piano</h5>
              <p class="card-text">Aprenda a tocar el Piano con nuestros grandes profesores que estan disponibles de 9 a
                7 de L-V.</p>
              <form method="post" action="#">
                <div class="d-grid">
                  <button class="btn btn-warning m-1" name="instrumentos[piano]" value="60">1h</button>
                  <button class="btn btn-warning m-1" name="instrumentos[piano]" value="90">1h 30m</button>
                  <button class="btn btn-warning m-1" name="instrumentos[piano]" value="120">2h</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-auto my-4">
          <div class="card" style="width: 18rem;">
            <img src="img/item-violin.png" class="card-img-top p-4" alt="violin">
            <div class="card-body">
              <h5 class="card-title">Violin</h5>
              <p class="card-text">Aprenda a tocar el Violin con nuestros grandes profesores que estan disponibles de 9
                a 7 de L-V.</p>
              <form method="post" action="#">
                <div class="d-grid">
                  <button class="btn btn-warning m-1" name="instrumentos[violin]" value="60">1h</button>
                  <button class="btn btn-warning m-1" name="instrumentos[violin]" value="90">1h 30m</button>
                  <button class="btn btn-warning m-1" name="instrumentos[violin]" value="120">2h</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-auto my-4">
          <div class="card" style="width: 18rem;">
            <img src="img/item-saxophone.png" class="card-img-top p-4" alt="saxophone">
            <div class="card-body">
              <h5 class="card-title">Saxofone</h5>
              <p class="card-text">Aprenda a tocar el Saxofone con nuestros grandes profesores que estan disponibles de
                9 a 7 de L-V.</p>
              <form method="post" action="#">
                <div class="d-grid">
                  <button class="btn btn-warning m-1" name="instrumentos[saxophone]" value="60">1h</button>
                  <button class="btn btn-warning m-1" name="instrumentos[saxophone]" value="90">1h 30m</button>
                  <button class="btn btn-warning m-1" name="instrumentos[saxophone]" value="120">2h</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-auto my-4">
          <div class="card" style="width: 18rem;">
            <img src="img/item-vasco.png" class="card-img-top p-4" alt="txalaparta">
            <div class="card-body">
              <h5 class="card-title">Txalaparta</h5>
              <p class="card-text">Aprenda a tocar la Txalaparta con nuestros grandes profesores que estan disponibles
                de 9 a 7 de L-V.</p>
              <form method="post" action="#">
                <div class="d-grid">
                  <button class="btn btn-warning m-1" name="instrumentos[vasco]" value="60">1h</button>
                  <button class="btn btn-warning m-1" name="instrumentos[vasco]" value="90">1h 30m</button>
                  <button class="btn btn-warning m-1" name="instrumentos[vasco]" value="120">2h</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-auto my-4">
          <div class="card" style="width: 18rem;">
            <img src="img/item-guitarra.png" class="card-img-top p-4" alt="guitarra">
            <div class="card-body">
              <h5 class="card-title">Guitarra Española</h5>
              <p class="card-text">Aprenda a tocar el Guitarra Española con nuestros grandes profesores que estan
                disponibles de 9 a 7 de L-V.</p>
              <form method="post" action="#">
                <div class="d-grid">
                  <button class="btn btn-warning m-1" name="instrumentos[guitarra]" value="60">1h</button>
                  <button class="btn btn-warning m-1" name="instrumentos[guitarra]" value="90">1h 30m</button>
                  <button class="btn btn-warning m-1" name="instrumentos[guitarra]" value="120">2h</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer id="footer" class="mt-0">
      <div class="contacto">
        <h3>Contacta con nosotros</h3>
        <ul class="info-contacto">
          <li>Calle de la musica Nº 25 </li>
          <li>+34 675 829 727</li>
          <li><a href="mailto:solfamidas.musical@gmail.com">Envíanos un Email</a></li>
          <li>Horario: L-V </li>
        </ul>
      </div>

      <div class="encuentranos">
        <h3>¡Encuentranos!</h3>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3099.9406795608065!2d125.7385361762642!3d39.01666667169882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMznCsDAxJzAwLjAiTiAxMjXCsDQ0JzI4LjAiRQ!5e0!3m2!1ses!2ses!4v1729185569626!5m2!1ses!2ses"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="siguenos">
        <h3>Síguenos en </h3>
        <ul>
          <li>
            <a href="https://www.instagram.com/">
              <span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg></span> <span>instagram</span></a>
          </li>
          <li>
            <a href="https://www.tiktok.com/es">
              <span> <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tiktok"
                  viewBox="0 0 16 16">
                  <path
                    d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                </svg></span><span>tiktok</span></a>
          </li>
          <li>
            <a href="https://x.com/">
              <span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-twitter"
                  viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                </svg></span><span>twitter</span></a>
          </li>
          <li>
            <a href="https://www.youtube.com/">
              <span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-youtube"
                  viewBox="0 0 16 16">
                  <path
                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                </svg></span> <span>youtube</span></a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
  <script async src="js/cart-quantity.js"></script>
</body>

</html>