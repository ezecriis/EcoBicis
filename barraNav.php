<?php

if (!empty($_SESSION['id_rol'])) {

  $rol = $_SESSION['id_rol'];


  switch ($rol) {
    case 1:
      echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
      echo "<ul>";
      echo "<li><a href='../web/hisotorialUsuarios.php'>Usuarios</a></li>";
      echo "<li><a href='..web/bicicletas.php'>Bicicletas</a></li>";
      echo "<li><a href='historialReservas.php'>Historial Reservas</a></li>";
      echo "<li><a href='logout.php'>Cerrar sesion</a></li>";
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
