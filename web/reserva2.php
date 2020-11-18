<?php
session_start();
$cuil = $_SESSION['cuil'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$email = $_SESSION['email'];
$telefono = $_SESSION['telefono'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = date('d-m-y');

/* This is for send a direct message of form Contact.php */

use  PHPMailer \ PHPMailer \ PHPMailer;
use  PHPMailer \ PHPMailer \ Exception;

/* Files required */

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

$mysqli = new mysqli("localhost", "root", "", "ecobicis");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

$result = $mysqli->query("SELECT entrega from reservas where fk_cuil = $cuil && entrega = 0");

/* determinar el número de filas del resultado */
$row_cnt = $result->num_rows;

if ($row_cnt == 0) {
    
    $result = $mysqli->query("INSERT INTO reservas (fk_cuil, fk_estacion_o, fk_estacion_d, fecha, entrega) VALUES ('$cuil', '$origen', '$destino', '$fecha', 0)");
    $result2 = $mysqli->query("SELECT disponibles FROM bicicletero WHERE fk_estacion = $origen && estado = 1");
    $r = $result2->fetch_assoc();
    $stock = $r['disponibles'];
    $stock = $stock - 1;
    $mysqli->query("UPDATE bicicletero set disponibles='$stock' where fk_estacion='$origen'");
    
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");

    $queryOrigen = "SELECT estacion from estaciones WHERE id_estacion = $origen";
    $conOrigen = $conexion->prepare($queryOrigen);
    $conOrigen->execute();
    $OrigenInicio = $conOrigen->fetch(PDO::FETCH_ASSOC);

    $queryDestino = "SELECT estacion from estaciones WHERE id_estacion = $destino";
    $conDestino = $conexion->prepare($queryDestino);
    $conDestino->execute();
    $DestinoFinal = $conDestino->fetch(PDO::FETCH_ASSOC);
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                            // Enable verbose debug output
    $mail->isSMTP();                                 // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';            // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                        // Enable SMTP authentication
    $mail->Username   = 'westecobicis@gmail.com';      // SMTP username
    $mail->Password   = '12Cristian34';               // SMTP password
    $mail->SMTPSecure = 'tls';                       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                         // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('westecobicis@gmail.com');
    $mail->addAddress($email);                       // Add a recipient

    // Content
    $mail->isHTML(true);                             // Set email format to HTML
    $mail->Subject = 'HA INICIADO UN VIAJE CON ECOBICIS';
    $mail->Body    = 'Usted esta en : ' . $OrigenInicio['estacion'] . '<br>' . 'Y viajara a : ' . $DestinoFinal['estacion'] . '<br>' . 'El dia : ' . $fecha . '<br>' . '</b>';
    $mail->CharSet = 'UTF-8';                          // Charset of characters.
    $mail->send();                                   // Send mail.

    
    header("location:../index.php?Var=8");

} else {

    $result = $mysqli->query("SELECT entrega from reservas where fk_cuil = $cuil && entrega = 0");
    $Entrega = $result->fetch_assoc();
    
    if ($Entrega['entrega'] == 0) {
        header("location:entrega.php");
    } else {
        $result = $mysqli->query("INSERT INTO reservas (fk_cuil, fk_estacion_o, fk_estacion_d, fecha, entrega) VALUES ('$cuil', '$origen', '$destino', '$fecha', 0)");
        $result2 = $mysqli->query("SELECT disponibles FROM bicicletero WHERE fk_estacion = $origen && estado = 1");
        $r = $result2->fetch_assoc();
        $stock = $r['disponibles'];
        $stock = $stock - 1;
        $mysqli->query("UPDATE bicicletero set disponibles='$stock' where fk_estacion='$origen'");

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");

    //Server settings
    $mail->SMTPDebug = 0;                            // Enable verbose debug output
    $mail->isSMTP();                                 // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';            // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                        // Enable SMTP authentication
    $mail->Username   = 'westecobicis@gmail.com';      // SMTP username
    $mail->Password   = '12Cristian34';               // SMTP password
    $mail->SMTPSecure = 'tls';                       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                         // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('westecobicis@gmail.com');
    $mail->addAddress($email);                       // Add a recipient

    // Content
    $mail->isHTML(true);                             // Set email format to HTML
    $mail->Subject = 'HA INICIADO UN VIAJE CON ECOBICIS';
    $mail->Body    = 'Usted esta en : ' . $origen . '<br>' . 'Y viajara a : ' . $destino . '<br>' . 'El dia : ' . $fecha . '<br>' . '</b>';
    $mail->CharSet = 'UTF-8';                          // Charset of characters.
    $mail->send();                                   // Send mail.

    
    header("location:../index.php?Var=8");
    }
}

/* cerrar la conexión */
$mysqli->close();
?>