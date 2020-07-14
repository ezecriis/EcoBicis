<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>West Ecobicis - Reserva</title>
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
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="../about.php">Sobre nosotros</a></li>
                    <li><a href="../services.php">Services</a></li>
                    <li><a href="../portfolio.php">Portfolio</a></li>
                    <li><a href="../contact.php">Contacto</a></li>
                    <li class="drop-down"><a href="#">Loguin</a>
                        <ul>
                            <li><a href="../web/registro.php">Registrarce</a></li>
                            <li><a href="#">Iniciar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Reserva</h2>
                    <ol>
                        <li><a href="../index.php">Home</a></li>
                        <li>Reserva</li>
                    </ol>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <div class="reservation">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            <br />
                            <br />
                            <br />
                            <br />
                            <form class="col-12 p-4 border border-warning" action="../web/reserva2.php" method="post">
                                <div class="form-group">
                                    <span class="login-leters">Lugar</span>
                                    <input class="form-control" name="origen" type="text" placeholder="Escriba donde esta">
                                </div>
                                <div class="form-group">
                                    <span class="login-leters">Destino</span>
                                    <input class="form-control" name="destino" type="text" placeholder="Escriba a donde va">
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn">A pedalear!</button>
                                </div>
                            </form>
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
            </div>

            <!-- ======= Maps ======= -->
            <div class="map mt-2">
                <div class="container-fluid p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62431.47225415157!2d-58.69773215701035!3d-34.67616159393097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb8aa7762bd43%3A0x3b271874eb632a7a!2sCastelar!5e0!3m2!1ses!2sar!4v1594745792185!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div> <!-- End maps -->
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
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>