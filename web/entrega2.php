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

        
        header("location:../index.php?Var=8");
    }

    // $sql = "INSERT INTO usuarios (nombre, apellido, password, cuil, email, sexo, telefono) VALUES ('$nombre', '$apellido', '$password' , '$cuil', '$email', '$sexo', '$telefono')";

} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}
