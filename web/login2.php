<?php
session_start();
$cuil = $_POST['cuil'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$password = $_POST['pass'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];

// $pass_provisoria = rand(0000, 9999);

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
    }
     else {
        $sql = "INSERT INTO usuarios (nombre, apellido, password, cuil, email, sexo, telefono) VALUES ('$nombre', '$apellido', '$password' , '$cuil', '$email', '$sexo', '$telefono')";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        header("location:../index.php?Var=8");
    }
    
    // $sql = "INSERT INTO usuarios (nombre, apellido, password, cuil, email, sexo, telefono) VALUES ('$nombre', '$apellido', '$password' , '$cuil', '$email', '$sexo', '$telefono')";

} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}
