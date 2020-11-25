<!DOCTYPE html>
<?php
session_start();
if (empty($_SESSION['cuil'])) :

    header("location:login.php?Error=5");
else :
    if ($_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) : ?>

        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <title>West Ecobicis - Entrega </title>
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

            <!-- =======================================================
  * Template Name: Moderna - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

        </head>

        <body>

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
                            <li><a href="../servicio.php">Services</a></li>
                            <li><a href="../portfolio.php">Portfolio</a></li>
                            <li><a href="../contact.php">Contacto</a></li>
                            <?php

                            if (!empty($_SESSION['id_rol'])) {

                                $rol = $_SESSION['id_rol'];


                                switch ($rol) {
                                    case 1:
                                        echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                                        echo "<ul>";
                                        echo "<li><a href='editUsu.php'>Admin</a></li>";
                                        echo "<li><a href='historialUsuarios.php'>Usuarios</a></li>";
                                        echo "<li><a href='bicicletas.php'>Bicicletas</a></li>";
                                        echo "<li><a href='bicicleteroABM.php'>Bicicletero ABM</a></li>";
                                        echo "<li><a href='historialReservas.php'>Historial Reservas</a></li>";
                                        echo "<li><a href='entrega.php'>Entrega</a></li>";
                                        echo "<li><a href='logout.php'>Cerrar sesion</a></li>";
                                        echo "</ul>";
                                        echo "</li>";
                                        break;
                                    case 2:
                                        echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
                                        echo "<ul>";
                                        echo "<li><a href='editUsu.php'>Mi Cuenta</a></li>";
                                        echo "<li><a href='reserva.php'>Reserva</a></li>";
                                        echo "<li><a href='bicicletas.php'>Bicicletas</a></li>";
                                        echo "<li><a href='entrega.php'>Entregar bicicleta</a></li>";
                                        echo "<li><a href='historial.php'>Historial</a></li>";
                                        echo "<li><a href='../logout.php'>Cerrar sesion</a></li>";
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
                            <h2>Entrega</h2>
                            <ol>
                                <li><a href="../index.php">Home</a></li>
                                <li>Entrega</li>
                            </ol>
                        </div>
                        </br>
                        <h5 class="center">Recuerde, solo puede reservar una sola ecobici</h5>
                    </div>
                </section><!-- End About Us Section -->

            </main> <!-- End #main -->

            <div class="register">


                <div class="section-center">
                    <div class="container">
                        <div class="row">
                            <div class="booking-form">
                                <br />
                                <br />
                                <br />
                                <form action="entrega2.php" class="col-12 p-4 border border-warning" method="post">
                                    <div class="form-group">
                                        <span class="login-leters">Cuil</span>
                                        <input class="form-control" name="cuil" type="text" placeholder="Escriba su cuil">
                                    </div>
                                    <div class="form-btn">
                                        <button class="submit-btn">Entregar ecobici</button>
                                    </div>
                                </form>
                                <br />
                                <br />
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                    <li><i class="bx bx-chevron-right"></i> <a href="../index.php">Inicio</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="../about.php">Sobre nosotros</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="../services.php">Services</a></li>
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


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcFjePSQivTobOPqBW_vRSveSgxpIUgcI&callback=initMap"></script>


        </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

        </html>
<?php else :
        header("location:../index.php?Var=4");
    endif;
endif;

?>