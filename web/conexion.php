<?php

$cuil = $_POST['cuil'];
$salt = md5($_POST['pass']);
$pass = crypt($_POST['pass'], $salt);

//$pass_entry = md5($pass);


try {
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");
} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}


$query = "SELECT * FROM usuarios where cuil = $cuil";
$con = $conexion->prepare($query);
$con->execute();

$num_filas=$con->rowCount();

if ($num_filas == 0) {
    header("location:../web/login.php?Error=2"); // cuil inexistente
} else { 
    $r = $con->fetch(PDO::FETCH_ASSOC);
    if ($r['password'] == $pass) {
        if ($r['estado'] == 1) {
            session_start();
            $_SESSION['cuil'] = $r['cuil'];
            $_SESSION['nombre'] = $r['nombre'];
            $_SESSION['apellido'] = $r['apellido'];
            $_SESSION['id_rol'] = $r['id_rol'];
            $_SESSION['email'] = $r['email'];
            $_SESSION['genero'] = $r['fk_genero'];
            $_SESSION['telefono'] = $r['telefono'];
            header("location:../index.php");
        }
        else {
            header("location:../web/login.php?Error=4"); // dado de baja
        }
    } else {
        header("location:../web/login.php?Error=1"); // pass incorrecta
    }
}


// //$pass_descifrada = password_verify($pass, $r['password']);

// $pass_descifrada = $r['password'];


//     if (hash_equals($pass_descifrada, $pass)) {
//         session_start();
//         session_set_cookie_params(60); // 1ms de inactividad
//         $_SESSION['cuil'] = $r['cuil'];
//         $_SESSION['nombre'] = $r['nombre'];
//         $_SESSION['apellido'] = $r['apellido'];
//         $_SESSION['id_rol'] = $r['id_rol'];
//         $_SESSION['email'] = $r['email'];
//         $_SESSION['genero'] = $r['fk_genero'];
//         $_SESSION['telefono'] = $r['telefono'];
//         //$_SESSION['rol'] = $r['rol'];
//        // header("location:../index.php");
//     } else {
//        header("location:../web/login.php?error=1");
//     }

?>
