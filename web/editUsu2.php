<?php
session_start();
$cuil = $_SESSION['cuil'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$salt = md5($_POST['pass']);
$password = crypt($_POST['pass'], $salt);
$email = $_POST['email'];
$telefono = $_POST['telefono'];


// $pass_provisoria = rand(0000, 9999);

try {
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");

    $query = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = $telefono where cuil='$cuil'";
    $con = $conexion->prepare($query);
    $con->execute();

    $query2 = "SELECT * FROM usuarios where cuil='$cuil'";
    $con2 = $conexion->prepare($query2);
    $con2->execute();

    $r = $con2->fetch(PDO::FETCH_ASSOC);

        $_SESSION['nombre'] = $r['nombre'];
        $_SESSION['apellido'] = $r['apellido'];
        $_SESSION['email'] = $r['email'];
        $_SESSION['telefono'] = $r['telefono'];

    header("location:../index.php?Var=2");

    
    
} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}
