<?php

$cuil = $_POST['cuil'];
$pass = $_POST['pass'];

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

$r = $con->fetch(PDO::FETCH_ASSOC);

//$pass_descifrada = password_verify($pass, $r['password']);




    if ($r['password'] == $pass) {
        session_start();
        $_SESSION['nombre'] = $r['nombre'];
        $_SESSION['apellido'] = $r['apellido'];
        $_SESSION['cuil'] = $r['cuil'];
        //$_SESSION['rol'] = $r['rol'];
        header("location:../index.php");
    } else {
        header("location:../web/login.php?error=1");
    }

?>
