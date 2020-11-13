<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  // $result = mysqli_query($con, "SELECT * FROM bicicletero");

  $result = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.direccion, bicicletero.stock, bicicletero.disponibles from estaciones inner join bicicletero on estaciones.id_estacion=bicicletero.fk_estacion && estaciones.estado=1"); 

  // Creamos una tabla para listar los datos 
  echo "<div class='table-responsive'>";

  echo "<table class='table table-dark'>
          <thead class='thead-dark'>
            <tr>
              <th scope='col'>Localidad</th>
              <th scope='col'>Dirección</th>
              <th scope='col'>Stock</th>
              <th scope='col'>Disponibles</th>
            </tr>
            </thead>
            <tbody>";

  while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td scope='col'>" . $row['estacion'] . "</td>";
      echo "<td scope='col'>" . preg_replace('/\\\\u([\da-fA-F]{4})/', '&#x\1;', $row['direccion']) . "</td>";
      echo "<td scope='col'>" . $row['stock'] . "</td>";
      echo "<td scope='col'>" . $row['disponibles'] . "</td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
  echo "</div>";

  mysqli_close($con);

?> 