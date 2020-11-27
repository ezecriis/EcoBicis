<!DOCTYPE html>
<?php
session_start();

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>West Ecobicis - porfolio </title>
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
        <h1 class="text-light"><a href="index.php"><span>eco bicis</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="about.php">Sobre nosotros</a></li>
          <li class="active"><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contacto</a></li>
          <?php

          if (!empty($_SESSION['id_rol'])) {
            $rol = $_SESSION['id_rol'];
            switch ($rol) {
              case 1:
                echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                echo "<ul>";
                echo "<li><a href='web/editUsu.php'>Super admin</a></li>";
                echo "<li><a href='web/creaAdmin.php'>Crear admin</a></li>";
                echo "<li><a href='web/auditoria.php'>Auditoria</a></li>";
                echo "<li><a href='web/historialUsuarios.php'>Usuarios</a></li>";
                echo "<li><a href='web/bicicletas.php'>Bicicletas</a></li>";
                echo "<li><a href='web/bicicleteroABM.php'>Bicicleteros ABM</a></li>";
                echo "<li><a href='web/historialReservas.php'>Historial Reservas</a></li>";
                echo "<li><a href='web/logout.php'>Cerrar sesion</a></li>";
                echo "</ul>";
                echo "</li>";
                break;
              case 2:
                echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                echo "<ul>";
                echo "<li><a href='web/editUsu.php'>Admin</a></li>";
                echo "<li><a href='web/historialUsuarios.php'>Usuarios</a></li>";
                echo "<li><a href='web/bicicletas.php'>Bicicletas</a></li>";
                echo "<li><a href='web/bicicleteroABM.php'>Bicicleteros ABM</a></li>";
                echo "<li><a href='web/historialReservas.php'>Historial Reservas</a></li>";
                echo "<li><a href='web/logout.php'>Cerrar sesion</a></li>";
                echo "</ul>";
                echo "</li>";
                break;
              case 3:
                echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                echo "<ul>";
                echo "<li><a href='web/editUsu.php'>Mi Cuenta</a></li>";
                echo "<li><a href='web/reserva.php'>Reserva</a></li>";
                echo "<li><a href='web/bicicletas.php'>Bicicletas</a></li>";
                echo "<li><a href='web/entrega.php'>Entregar bicicleta</a></li>";
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

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio</h2>
          <ol>
            <li><a href="index.php">Inicio</a></li>
            <li>Portfolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Ciuedad</li>
              <li data-filter=".filter-card">Pasisaje</li>
              <li data-filter=".filter-web">Bicis</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/porfolio-11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/porfolio-11.jpg" data-gall="portfolioGallery" class="venobox" title="Ciuedad">Ciuedad</a></h3>
                <a href="assets/img/portfolio/porfolio-11.jpg" data-gall="portfolioGallery" class="venobox" title="Ciuedad"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/porfolio-22.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/porfolio-22.jpg" data-gall="portfolioGallery" class="venobox" title="Bicis 3">Bicis 3</a></h3>
                <a href="assets/img/portfolio/porfolio-22.jpg" data-gall="portfolioGallery" class="venobox" title="Bicis 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/porfolio-33.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/porfolio-33.jpg" data-gall="portfolioGallery" class="venobox" title="Pasisaje 1">Paisaje 1</a></h3>
                <a href="assets/img/portfolio/porfolio-33.jpg" data-gall="portfolioGallery" class="venobox" title="Pasisaje 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/porfolio-44.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/porfolio-44.jpg" data-gall="portfolioGallery" class="venobox" title="Pasisaje 2">Pasisaje 2</a></h3>
                <a href="assets/img/portfolio/porfolio-44.jpg" data-gall="portfolioGallery" class="venobox" title="Pasisaje 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/porfolio-55.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/porfolio-55.jpg" data-gall="portfolioGallery" class="venobox" title="Bicis 2">Bicis 2</a></h3>
                <a href="assets/img/portfolio/porfolio-55.jpg" data-gall="portfolioGallery" class="venobox" title="Bicis 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/porfolio-66.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/porfolio-66.jpg" data-gall="portfolioGallery" class="venobox" title="Pasisaje 3">Pasisaje 3</a></h3>
                <a href="assets/img/portfolio/porfolio-66.jpg" data-gall="portfolioGallery" class="venobox" title="Pasisaje 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/porfolio-77.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/porfolio-77.jpg" data-gall="portfolioGallery" class="venobox" title="Pasisaje 4">Pasisaje 4</a></h3>
                <a href="assets/img/portfolio/porfolio-77.jpg" data-gall="portfolioGallery" class="venobox" title="Pasisaje 4"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/porfolio-88.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/porfolio-88.jpg" data-gall="portfolioGallery" class="venobox" title="Paisaje 5">Paisaje 5</a></h3>
                <a href="assets/img/portfolio/porfolio-88.jpg" data-gall="portfolioGallery" class="venobox" title="Paisaje 5"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/porfolio-99.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/porfolio-99.jpg" data-gall="portfolioGallery" class="venobox" title="Bicis 1">Bicis 1</a></h3>
                <a href="assets/img/portfolio/porfolio-99.jpg" data-gall="portfolioGallery" class="venobox" title="Bicis 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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