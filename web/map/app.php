<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  // $result = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1'");

  // $result = mysqli_query($con, "SELECT bicicletero.direccion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1'");

  // Listamos de las estaciones y direcciones
  $result = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.direccion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1'");

  // Creamos una tabla para listar los datos 
  echo "<div class='table-responsive'>";

  echo "<table class='table table-dark'>
          <thead class='thead-dark'>
            <tr>
              <th scope='col'>Localidad</th>
              <th scope='col'>Dirección</th>
            </tr>
            </thead>
            <tbody>";

  while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td scope='col'>" . $row['estacion'] . "</td>";
      echo "<td scope='col'>" . preg_replace('/\\\\u([\da-fA-F]{4})/', '&#x\1;', $row['direccion']) . "</td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
  echo "</div>";

  mysqli_close($con);

?> 