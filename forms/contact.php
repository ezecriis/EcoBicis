<?php
/* This is for send a direct message of form Contact.php */

use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ Exception ;

/* Files required */
require '../src/Exception.php';
require '../src/PHPMailer.php' ;
require '../src/SMTP.php' ;

/* Vars of form contact.php */
$name = $_POST['name'];
$email= $_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

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
    $mail->Subject = 'GRACIAS POR COMUNICARCE CON ECOBICIS';
    $mail->Body    = 'Nombre: ' . $name . '<br>' . 'Email: ' . $email . '<br>' . 'sujeto: ' . $subject . '<br>' . 'Mensaje: ' . $message . '<br>' . '</b>';
    $mail->CharSet='UTF-8';                          // Charset of characters.
    $mail->send();                                   // Send mail.

    /* Location after of send mail */
    // header(htmlentities("location:../index.php?send"));
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje. {$mail->ErrorInfo}";
}
