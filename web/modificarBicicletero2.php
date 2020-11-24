<?php
session_start();
$cuil = $_SESSION['cuil'];
$disponibles = $_POST['disponibles'];
$stock = $_POST['stock'];
$id = $_SESSION['id_estacion'];


try {
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");

    $query = "UPDATE bicicletero SET disponibles = $disponibles, stock = $stock WHERE id = $id";
    $con = $conexion->prepare($query);
    $con->execute();


    header("location:bicicleteroABM.php");


    
} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}
