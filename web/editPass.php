<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>West Ecobicis - Inicie sesion</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favIcon2.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
  <?php //include "../includes/nav.php"; 
  ?>

  <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="../index.php"><span>Eco bicis</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Inicio</a></li>
          <li><a href="../about.php">Sobre nosotros</a></li>
          <li><a href="../services.php">Services</a></li>
          <li><a href="../portfolio.php">Portfolio</a></li>
          <li><a href="../contact.php">Contacto</a></li>
          <?php

          if (!empty($_SESSION['id_rol'])) {

            $rol = $_SESSION['id_rol'];


            switch ($rol) {
              case 1:
                echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                echo "<ul>";
                echo "<li><a href='editUsu.php'>Super admin</a></li>";
                echo "<li><a href='creaAdmin.php'>Crear admin</a></li>";
                echo "<li><a href='auditoria.php'>Auditoria</a></li>";
                echo "<li><a href='historialUsuarios.php'>Usuarios</a></li>";
                echo "<li><a href='bicicletas.php'>Bicicletas</a></li>";
                echo "<li><a href='historialReservas.php'>Historial Reservas</a></li>";
                echo "<li><a href='logout.php'>Cerrar sesion</a></li>";
                echo "</ul>";
                echo "</li>";
                break;
              case 2:
                echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                echo "<ul>";
                echo "<li><a href='editUsu.php'>Admin</a></li>";
                echo "<li><a href='historialUsuarios.php'>Usuarios</a></li>";
                echo "<li><a href='bicicletas.php'>Bicicletas</a></li>";
                echo "<li><a href='historialReservas.php'>Historial Reservas</a></li>";
                echo "<li><a href='logout.php'>Cerrar sesion</a></li>";
                echo "</ul>";
                echo "</li>";
                break;
              case 3:
                echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                echo "<ul>";
                echo "<li><a href='editUsu.php'>Mi Cuenta</a></li>";
                echo "<li><a href='reserva.php'>Reserva</a></li>";
                echo "<li><a href='bicicletas.php'>Bicicletas</a></li>";
                echo "<li><a href='entrega.php'>Entregar bicicleta</a></li>";
                echo "<li><a href='historial.php'>Historial</a></li>";
                echo "<li><a href='logout.php'>Cerrar sesion</a></li>";
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
          <h2>Login</h2>
          <ol>
            <li><a href="../index.php">Inicio</a></li>
            <li>LogIn</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <div class="login">
      <div class="container">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <div class="login-leters">
          <div class="row">
            <div class="col">
            </div>

            <div class="col-5 p-4 border border-warning" id="nuevoCliente">
              <h4 aling="center">Cambio de Contraseña</h4>
              <form action="../web/editPass2.php" method="post">
                <div class="form-group">
                  <label>Nueva Contraseña:</label>
                  <input class="form-control" type="password" name="npass" minlength="5" required>
                  <label>Confirmar Contraseña:</label>
                  <input class="form-control" type="password" name="rpass" minlength="5" required>
                </div>
                <br />
                <div class="form-group">
                  <button class="btn btn-success btn-sm btn-block" type="submit" name="enviar" id="enviar">Modificar</button>
                </div>
              </form>
              <?php
              if (isset($_GET['error']) == 1) {
                echo "<div class='alert alert-danger' role='alert'>Las contraseñas no son iguales.</div>";
              }
              ?>
              <br>
              <br>
            </div>

            <div class="col">
            </div>
          </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
      </div>
    </div>

  </main> <!-- End #main -->

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
            <p>Empresa creada con el fin de cuidar el medio ambiente, ofreciendo bicicletas sustentabes para
              la sociedad.</p>
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
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>