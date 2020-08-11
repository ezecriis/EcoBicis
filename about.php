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

  <title> West Ecobicis - Sobre nosotros</title>
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
  <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>Eco Bicis</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li class="active"><a href="about.php">Sobre nosotros</a></li>
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
                echo "<li><a href='web/historialUsuarios.php'>Usuarios</a></li>";
                echo "<li><a href='web/.php'>Bicicletas</a></li>"; // Add a href new file
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

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sobre nosotros</h2>
          <ol>
            <li><a href="index.php">Inicio</a></li>
            <li>Sobre nosotros</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/aboutHD.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Somos un equipo dedicados al bien estar del planeta.</h3>
            <p class="font-italic">
              Con el fin de desarrollar herramientas para el ecosistema.. 
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Nos guiamos y orientamos a nuestros clientes a no dañar mas el ecosistema.</li>
              <li><i class="icofont-check-circled"></i> Realizamos bicicletas ecosustentanbles.</li>
              <li><i class="icofont-check-circled"></i> Evitamos el uso de la materia prima para no contaminar el medio ambiente.</li>
            </ul>
            <p>
              Con el fin de ño dañar el planeta tierra, comenzamos a emprender este pequeño cambio para la sociedad,
              la idea es que se descontamine el planeta tierra, asi descongestionando la via publica de vehiculos y 
              poder bicletear en tu bicicleta sustentable. 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Usuarios</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Eco bicis</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Horas de soporte</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Bicicleteros</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Estadisticas</h2>
          <p>Hemos hechos un pequeño esquema con las estidisticas de los usuarios en las eco bocis para saber si la gente utuiliza esta herramienta sustentable.</p>
        </div>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Personas mas felices <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Personas mas sanas <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Personas llegando mas temprano <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Descontaminacion <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Testimonios</h2>
          <p>Realizamos unos testimonios de las personas que utilizan las eco bicis para tener una opinion mas personal.</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Comence usando las eco bicis solo cuando perdia el subte, luego me di cuenta que llegaba a mi trabajo mas rapido en bicileta que en el subte, asi estoy ahorrando dinero y tiempo que es lo mas importante.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Gomez</h3>
            <h4>Diseñadora</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Desde que comence a usar las eco bicis he notado cambios en mi cuerpo, como un mejor estado fisico y me siento mucho mejor conmigo misma.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Carla Peterson</h3>
            <h4>Administrativa</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Empece a usar las ecobicis con el fin de ahorrar dinero, y termine ahorrando tiempo y diniero ya que no voy mas al gimnasio porque entreno con las ecobicis.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Simplemente utilizo las ecobicis para pasear el fin de semana por el parque, e ir a lugares verdes.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>Juan Carlo</h3>
            <h4>Ingeniero en sistemas</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Amo las bicis sustentable, de esta manera ahorramos el uso del transporte publico y al mismo tiempo no se degrada tanto el medio ambiente.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Ttstimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Links utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
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
            <p>Empresa creada con el fin de cuidar el medio ambiente, ofreciendo bicicletas sustentabes para la sociedad.</p>
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