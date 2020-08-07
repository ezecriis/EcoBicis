<?php
/* This is for send a direct message of form Contact.php */

use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ Exception ;

/* Files required */
require '../src/Exception.php';
require '../src/PHPMailer.php' ;
require '../src/SMTP.php' ;

/* Vars of form contact.php */
$email= $_POST['email'];

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");
} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}


$query = "SELECT email, cuil FROM usuarios where email = '$email'";
$con = $conexion->prepare($query);
$con->execute();

$r = $con->fetch(PDO::FETCH_ASSOC);

$email_base = $r['email'];

if($email_base = $email){

    $aleatoria = rand(10000,99999);

    $encriptada =  md5($aleatoria);
    $password = crypt($aleatoria, $encriptada);
    
    $cuil = $r['cuil'];
    
    $query2 = "UPDATE usuarios SET password = '$password' where cuil = '$cuil'";
    $con2 = $conexion->prepare($query2);
    $con2->execute();

try {
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
    $mail->Subject = 'ECOBICIS';
    $mail->Body    = 'Su nueva contraseña es ' . $aleatoria;

    $mail->CharSet='UTF-8';                          // Charset of characters.
    $mail->send();                                   // Send mail.

    header("location:../index.php?Var=1");
    /* Location after of send mail */
    // header(htmlentities("location:../contact.php?send"));
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje. {$mail->ErrorInfo}";
}


}else{
   header("location:../web/pass_recu.php?error=1");
} 

