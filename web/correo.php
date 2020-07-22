<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) &&
    !empty($_POST['telefono']) && !empty($_POST['cuil']) ) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $cuil = $_POST['cuil'];
        $header = "From: norepy@example.com" . "\r\r";
        $header = "Reply-To: norepy@example.com" . "\r\r";
        $header = "X-mailer: PHP/" . "\r\r";
        $mail = mail($email, $nombre, $apellido, $telefono, $cuil, $header);
        if ($mail) {
            echo "<h4> Mail enviado exitosamente! </h4>";
        }
    }
}

// Check for empty fields
// if (
//     empty($_POST['nombre'])    ||
//     empty($_POST['apellido'])  ||
//     empty($_POST['email'])     ||
//     empty($_POST['telefono'])  ||
//     empty($_POST['cuil'])      ||
//     !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
// ) {
//     echo "<script> alert('Los datos estan incompletos o mal cargados');</script>";
//     return false;
// }

// $nombre = strip_tags(htmlspecialchars($_POST['nombre']));
// $apellido = strip_tags(htmlspecialchars($_POST['apellido']));
// $email = strip_tags(htmlspecialchars($_POST['email']));
// $telefono = strip_tags(htmlspecialchars($_POST['telefono']));
// $cuil = strip_tags(htmlspecialchars($_POST['cuil']));
// $message = strip_tags(htmlspecialchars($_POST['message']));

// // Create the email and send the message
// $to = 'cr.ezequiel24@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
// $email_subject = "Website Contact Form:  $nombre";
// $email_body = "You have received a new message from your website contact form.\n\n" . "Here are the details:\n\nName: $nombre\n\nEmail: $email\n\nPhone: $telefono\n\nMessage:\n$message";
// $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email";
// mail($to, $email_subject, $email_body, $headers);

// echo "<script> alert('Gracias por llenar el formulario. ¡Su mensaje se ha enviado con éxito!');</script>";
// echo "<script>window.location='http://cellsystem.000webhostapp.com";
// header('Location:http://cellsystem.000webhostapp.com'); -->
