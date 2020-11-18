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
