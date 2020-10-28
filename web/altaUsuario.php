<?php

$id = $_GET['id'];


try {
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");
} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}

$query = "UPDATE usuarios SET estado =1 WHERE id_usuario=$id";
$con = $conexion->prepare($query);
$con->execute();

  header("location:historialUsuarios.php");

?>