<?php

if (!empty($_SESSION['id_rol'])) {

  $rol = $_SESSION['id_rol'];

  if ($rol === 1 ) {
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
  } elseif ( $rol === 2 ) {
    echo "<li class='drop-down'><a href='#'>" . $_SESSION['nombre'] . "</a>";
      echo "<ul>";
      echo "<li><a href='web/editUsu.php'>Mi Cuenta</a></li>";
      echo "<li><a href='web/reserva.php'>Reserva</a></li>";
      echo "<li><a href='web/bicicletas.php'>Bicicletas</a></li>";
      echo "<li><a href='web/historial.php'>Historial</a></li>";
      echo "<li><a href='web/logout.php'>Cerrar sesion</a></li>";
      echo "</ul>";
      echo "</li>";
  }
  else {
  echo "<li class='drop-down'><a href='#'>Login</a>";
  echo "<ul>";
  echo "<li><a href='web/registro.php'>Registrarse</a></li>";
  echo "<li><a href='web/login.php'>Iniciar sesion</a></li>";
  echo "</ul>";
  echo "</li>";
  }
}
?>
