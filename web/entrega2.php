<?php
session_start();

/* This is for send a direct message of form Contact.php */

use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;

/* Files required */

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

$cuil = $_POST['cuil'];
$nro_entrega = $_POST['nro_entrega'];


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


$mysqli = new mysqli("localhost", "root", "", "ecobicis");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($cuil == $_SESSION['cuil']) {
    $result = $mysqli->query("SELECT entrega, nro_entrega from reservas where fk_cuil = $cuil && entrega = 0");
    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;
    $nro_entregaDB = $result->fetch_assoc();
    if ($row_cnt == 1) {
        if ($nro_entregaDB['nro_entrega'] == $nro_entrega) {

            $query = "SELECT email FROM usuarios where cuil = '$cuil'";

            $con = $mysqli->query($query);

            $r = $con->fetch_assoc();

            $email = $r['email'];

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
            $mail->Subject = 'SE HA ENTREGADO CON ÉXITO LA ECOBICI, GRACIAS!';
            $mail->Body    = 'Cuil: ' . $cuil . '<br> . </b>';
            $mail->CharSet = 'UTF-8';                          // Charset of characters.
            $mail->send();                                   // Send mail.

            $sql2 = "SELECT reservas.fk_cuil, reservas.fk_estacion_o, bicicletero.disponibles FROM reservas INNER JOIN bicicletero ON reservas.fk_cuil ='$cuil' && reservas.fk_estacion_o = bicicletero.fk_estacion && reservas.entrega = 0";

            $consulta2 = $mysqli->query($sql2);
            $r = $consulta2->fetch_assoc();
            $stock = $r['disponibles'];
            $origen = $r['fk_estacion_o'];
            $stock = $stock + 1;

            $sql3 = "UPDATE bicicletero set disponibles='$stock' where fk_estacion='$origen'";
            $consulta3 = $mysqli->query($sql3);

            $query2 = "UPDATE reservas SET entrega='1' WHERE entrega = 0 && fk_cuil ='$cuil'";
            $con2 = $mysqli->query($query2);

            // agregar un alert de que entrego ecobici
            header("location:../index.php?Var=6");
        } else {
            header("location:entrega.php?Error=13"); // nro de entrega invalido
        }
    } else {
        header("location:entrega.php?Error=14"); // cuil sin entregas pendiente
    }
} else {
    header("location:entrega.php?Error=12"); // Agregar error en alert, cuil invalido  de sesion
}
    

//  else {
//     //Server settings
//     $mail->SMTPDebug = 0;                            // Enable verbose debug output
//     $mail->isSMTP();                                 // Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';            // Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                        // Enable SMTP authentication
//     $mail->Username   = 'westecobicis@gmail.com';      // SMTP username
//     $mail->Password   = '12Cristian34';               // SMTP password
//     $mail->SMTPSecure = 'tls';                       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//     $mail->Port       = 587;                         // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//     //Recipients
//     $mail->setFrom('westecobicis@gmail.com');
//     $mail->addAddress($email);                       // Add a recipient

//     // Content
//     $mail->isHTML(true);                             // Set email format to HTML
//     $mail->Subject = 'SE HA ENTREGADO CON ÉXITO LA ECOBICI, GRACIAS!';
//     $mail->Body    = 'Cuil: ' . $cuil . '<br></b>';
//     $mail->CharSet = 'UTF-8';                          // Charset of characters.
//     $mail->send();                                   // Send mail.


// }
