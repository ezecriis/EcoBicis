<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)

  $result1 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Moreno'");

  $result2 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Paso del Rey'");

  $result3 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Merlo'");

  $result4 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Padua'");

  $result5 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Ituzaingo'");

  $result6 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Castelar'");

  $result7 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Moron'");

  $result8 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Haedo'");
  
  $result9 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Ramos Mejia'");

  $result10 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Ciudadela'");

  $result11 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Liniers'");
  
  $result12 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Villa Luro'");

  $result13 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Floresta'");
  
  $result14 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Flores'");

  $result15 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Caballito'");

  $result16 = mysqli_query($con, "SELECT estaciones.estacion, bicicletero.lat, bicicletero.lng from estaciones INNER JOIN bicicletero ON estaciones.id_estacion = bicicletero.fk_estacion && estaciones.estado = '1' && estaciones.estacion = 'Once'");

  // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian direccion, lat y lng 
 $row = mysqli_fetch_array($result1);
    echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';
  

 $row = mysqli_fetch_array($result2);
    echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result3);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result4);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result5);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result6);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result7);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result8);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result9);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result10);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result11);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result12);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result13);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result14);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result15);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

 $row = mysqli_fetch_array($result16);
  echo '["' . $row['estacion'] . '", ' . $row['lat'] . ', ' . $row['lng'] . '],';

?>