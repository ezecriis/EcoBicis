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

$query = "UPDATE bicicletero SET estado =0 WHERE id=$id";
$con = $conexion->prepare($query);
$con->execute();

  header("location:bicicleteroABM.php");

?>