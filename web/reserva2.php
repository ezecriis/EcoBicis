<?php
session_start();
$cuil = $_SESSION['cuil'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];

//$pass_provisoria = rand(0000, 9999);

try {
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");


    $sql = "INSERT INTO reservas (cuil, origen, destino) VALUES ('$cuil', '$origen', '$destino')";

    $consulta = $conexion->prepare($sql);
    $consulta->execute();
    header("location:../index.php?Var=8");
} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}
?>