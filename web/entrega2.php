<?php
session_start();

/* This is for send a direct message of form Contact.php */

use  PHPMailer \ PHPMailer \ PHPMailer;
use  PHPMailer \ PHPMailer \ Exception;

/* Files required */

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

$cuil = $_POST['cuil'];


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");

    $query = "SELECT cuil,email FROM usuarios where cuil = '$cuil'";
    
    $con = $conexion->prepare($query);
    $con->execute();

    $r = $con->fetch(PDO::FETCH_ASSOC);

    $email = $r['email'];

    if ($r['cuil'] != $cuil) {
        header("location:entrega.php?error=7");
    } else {


        //Server settings
        $mail->SMTPDebug = 0;                            // Enable verbose debug output
        $mail->isSMTP();                                 // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';            // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                        // Enable SMTP authentication
        $mail->Username   = 'cr.ezequiel24@gmail.com';      // SMTP username
        $mail->Password   = 'sesion300693';               // SMTP password
        $mail->SMTPSecure = 'tls';                       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                         // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('cr.ezequiel24@gmail.com');
        $mail->addAddress($email);                       // Add a recipient

        // Content
        $mail->isHTML(true);                             // Set email format to HTML
        $mail->Subject = 'SE HA ENTREGADO CON ÉXITO LA ECOBICI, GRACIAS!';
        $mail->Body    = 'Cuil: ' . $cuil . '<br></b>';
        $mail->CharSet = 'UTF-8';                          // Charset of characters.
        $mail->send();                                   // Send mail.

        // agregar un alert de que entrego ecobici
        header("location:../index.php?Var=8");
    }

    $sql2 = "SELECT reservas.fk_cuil, reservas.fk_estacion_o, bicicletero.disponibles FROM reservas INNER JOIN bicicletero ON reservas.fk_cuil ='$cuil' && reservas.fk_estacion_o = bicicletero.fk_estacion && reservas.entrega = 0";

    $consulta2 = $conexion->prepare($sql2);
    $consulta2->execute();
    $r = $consulta2->fetch(PDO::FETCH_ASSOC);
    $stock = $r['disponibles'];
    $origen = $r['fk_estacion_o'];
    $stock = $stock + 1;
    
    $sql3 = "update bicicletero set disponibles='$stock' where fk_estacion='$origen'";
    $consulta3 = $conexion->prepare($sql3);
    $consulta3->execute();

    $query2 = "UPDATE reservas SET entrega='1' WHERE entrega = 0 && fk_cuil ='$cuil'";
    $con2 = $conexion->prepare($query2);
    $con2->execute();

} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}
