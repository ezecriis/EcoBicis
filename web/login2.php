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
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$salt = md5($_POST['pass']);
$password = crypt($_POST['pass'], $salt);
$email = $_POST['email'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];

// $pass_provisoria = rand(0000, 9999);

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");

    $query = "SELECT * FROM usuarios where email ='$email' or cuil='$cuil'";
    // $queryCuil = "SELECT * FROM usuarios where cuil ='$cuil'";
    $con = $conexion->prepare($query);
    $con->execute();

    $r = $con->fetch(PDO::FETCH_ASSOC);

    // $pass_descifrada = password_verify($pass, $r['password']);

    if ($r['email'] == $email || $r['cuil'] == $cuil) {
        header("location:../web/registro.php?error=7");
    } else {

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
        $mail->addAddress($email); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'SE HA REGISTRADO CON EXITO! BIENVENIDO A ECOBICIS';
        $mail->Body    = 'Nombre: ' . $nombre . '<br>' . 'Apellido: ' . $apellido . '<br>' . 'Email: ' . $email . '<br>' . 'Telefono: ' . $telefono . '<br>' . 'Genero: ' . $genero . '<br>' . 'Cuil: ' . $cuil . '<br>' . 'Contraseña: ' . $password . '<br>' . '<br>' . '</b>';
        $mail->CharSet = 'UTF-8'; // Charset of characters.
        $mail->send(); // Send mail.

        $sql = "INSERT INTO usuarios (cuil, nombre, apellido, password, email, fk_genero, telefono, id_rol, estado) VALUES ('$cuil', '$nombre', '$apellido', '$password', '$email', '$genero', '$telefono', '2', '1')";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        header("location:../index.php?Var=8");
    }

} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}
