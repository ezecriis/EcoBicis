<!DOCTYPE html>
<?php
session_start();
// session_set_cookie_params(60); // 1ms de inactividad
//if (empty($_SESSION['nombre'])) {
//    echo "INICIA SESION";
//}
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>West Ecobicis - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favIcon2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>Eco Bicis</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Inicio</a></li>
          <li><a href="about.php">Sobre nosotros</a></li>
          <!-- <li><a href="servicio.php">Services</a></li> -->
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contacto</a></li>
          <?php

          if (!empty($_SESSION['id_rol'])) {

            $rol = $_SESSION['id_rol'];


            switch ($rol) {
              case 1:
                echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                echo "<ul>";
                echo "<li><a href='web/editUsu.php'>Admin</a></li>";
                echo "<li><a href='web/historialUsuarios.php'>Usuarios</a></li>";
                echo "<li><a href='web/bicicletas.php'>Bicicletas</a></li>";
                echo "<li><a href='web/historialReservas.php'>Historial Reservas</a></li>";
                echo "<li><a href='web/entrega.php'>Entrega</a></li>";
                echo "<li><a href='web/logout.php'>Cerrar sesion</a></li>";
                echo "</ul>";
                echo "</li>";
                break;
              case 2:
                echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                echo "<ul>";
                echo "<li><a href='web/editUsu.php'>Mi Cuenta</a></li>";
                echo "<li><a href='web/reserva.php'>Reserva</a></li>";
                echo "<li><a href='web/bicicletas.php'>Bicicletas</a></li>";
                echo "<li><a href='web/historial.php'>Historial</a></li>";
                echo "<li><a href='web/logout.php'>Cerrar sesion</a></li>";
                echo "</ul>";
                echo "</li>";
                break;
            }
          } else {
            echo "<li class='drop-down'><a href='#'>Login</a>";
            echo "<ul>";
            echo "<li><a href='web/registro.php'>Registrarse</a></li>";
            echo "<li><a href='web/login.php'>Iniciar sesion</a></li>";
            echo "</ul>";
            echo "</li>";
          }

          ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <?php
          if (isset($_GET['Var']) === 8) {
            echo "<div class='alert alert-success' role='alert'>¡Registro con éxito!</div>";
          }
          if (isset($_GET['Var']) === 1) {
            echo "<div class='alert alert-success' role='alert'>¡Envio de recuperacion de contraseña con éxito!</div>";
          }
          ?>
          <h2 class="animated fadeInDown">Bienvenido a <span>Eco bicis</span></h2>
          <p class="animated fadeInUp">Sistema de bicicletas sustentabe.</p>
          <a href="" class="btn-get-started animated fadeInUp">Leer mas</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Eco bicis</h2>
          <p class="animated fadeInUp">Zona oeste tiene su Sistema de Transporte Público en Bicicletas, ahora con
            estaciones automáticas, para que disfrutes Ecobici gratis, las 24 horas, todos los días del año.</p>
          <a href="" class="btn-get-started animated fadeInUp">Leer mas</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Las eco bicis</h2>
          <p class="animated fadeInUp">Las bicicletas pueden retirarse en cada estacion del tren sarmiento en zona
            oeste.</p>
          <a href="" class="btn-get-started animated fadeInUp">Leer mas</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">
        <!-- <?php
              // if (isset($_GET['Var']) == 8) {
              // echo "<div class='alert alert-success' role='alert'>¡Registro con éxito!.</div>";
              // }
              ?> -->
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="web/registro.php">¿Como me registro?</a></h4>
              <p class="description">Segui el paso a paso para inscribirte en el sistema.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="web/utilizacionSistema.php">¿Como utilizar el sistema?</a></h4>
              <p class="description">Es muy simple!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="web/map.php">Mapa de estaciones y disponibilidad de bicicletas</a></h4>
              <p class="description">Consulta las estaciones</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-send"></i></div>
              <h4 class="title"><a href="contact.php">Comunicate con nosotros</a></h4>
              <p class="description">Envianos un correo para saber mas de los servicios</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 video-box">
            <img src="assets/img/woman.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=38sFL90M-VE" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Bicicletas sustentabes</h2>
          <p>Una nueva manera de pensar la Ciudad se instaló en Buenos Aires y en muchas otras grandes urbes del mundo.
            El colapso del tránsito, los estragos que éste genera en el medioambiente
            y los altos niveles de estrés, sedentarismo y aislamiento asociados al automóvil, llevaron al agotamiento
            del enfoque que concebía y construía ciudades diseñadas principalmente para los autos.
          </p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <br />
            <br />
            <img src="assets/img/huella-ecologica.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Calculá tu huella ecológica.</h3>
            <p class="font-italic">
              Si tenés pensado hacer tus viajes en bici o caminando calculá tu ahorro de emisiones de dióxido de carbono
              (CO2), los beneficios para tu salud y tu economía comparados con los medios de transporte que usás ahora.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Ahorra dinero !</li>
              <li><i class="icofont-check"></i> Ahorra tiempo !</li>
              <li><i class="icofont-check"></i> Y lo mejor, no dañas el medio ambiente !</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <br />
            <br />
            <img src="assets/img/historia.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Historia de la bici en Buenos Aires</h3>
            <p class="font-italic">
              Conocé cómo surgió el Plan de Movilidad Sustentable y el programa Ecobici.
            </p>
            <p>
              La visión de transformar la Ciudad de Buenos Aires en una ciudad más verde, inclusiva, creativa e
              innovadora fue el motor principal de acciones estratégicas como el fomento del uso de la bicicleta como
              medio de transporte.
              Antes de lanzar el programa Ecobici, se llevó adelante un estudio de opinión que dio como resultado que en
              la Ciudad de Buenos Aires había 1.000.000 de bicicletas en los hogares y que, para la mayoría de los
              porteños,
              era un recuerdo de la infancia compartido con seres queridos. Se buscó recuperar ese momento y proyectar
              una ciudad donde la bicicleta, esencialmente saludable y amigable con el medio ambiente, sea una verdadera
              alternativa de transporte
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/bici-campo.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Descuentos y beneficios</h3>
            <p>Ecobici quiere reconocer a todos aquellos que eligen moverse en bici e incentivar su uso en quienes
              todavía no se animaron a la movida en dos ruedas.
              Por eso próximamente vas a poder disfrutar de más beneficios para los ciclistas!</p>
            <ul>
              <li><i class="icofont-check"></i> Menos transporte publico </li>
              <li><i class="icofont-check"></i> Menos automóviles en la calle </li>
              <li><i class="icofont-check"></i> Menos consumo de petroleo, menos daño al ecosistema</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <br />
            <br />
            <br />
            <br />
            <img src="assets/img/bici-capo-cielo.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Programa de bicicletas</h3>
            <p class="font-italic">
              La estrategia integral que se llevó adelante incluye la planificación y construcción de una red de
              ciclovías protegidas, el primer sistema público
              y gratuito de bicicletas en Argentina y un trabajo diario con todos los sectores de la comunidad: vecinos,
              ONG’s, escuelas, universidades, empresas y medios de comunicació.
            </p>
            <p>
              La fuerte convicción y la voluntad de cambio lograron posicionar esta iniciativa de transporte en una
              política transversal e interministerial.
              Así, con el acompañamiento de todo un gobierno, con el apoyo y las críticas constructivas de la comunidad,
              en menos de 5 años se logró el cambio
              cultural que hizo de la Ciudad de Buenos Aires una de las ciudades del continente americano más amigables
              para los ciclistas
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Links utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">Sobre nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos de servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politica y privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contacto</h4>
            <p>
              Balcarce 1668 <br>
              Buenos Aires, Padua<br>
              Zona oeste <br><br>
              <strong>Tel:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> westecobicis@hotmail.com<br>
            </p>

          </div>

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Sobre nosotros</h3>
            <p>Empresa creada con el fin de cuidar el medio ambiente, ofreciendo bicicletas sustentabes para la
              sociedad.</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/explore" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/in/cristian-ledesma-452137162/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>West Ecobicis</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://www.linkedin.com/in/cristian-ledesma-452137162/">Cristian Ezequiel</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>