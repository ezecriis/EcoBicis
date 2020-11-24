<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Castelar'");

  // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian direccion, lat y lng 
  while ($row = mysqli_fetch_array($result)) {
      echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';
  }
?>