<?php
session_start();
$salt = md5($_POST['npass']);
$password = crypt($_POST['npass'], $salt);

$rsalt = md5($_POST['rpass']);
$rpassword = crypt($_POST['rpass'], $salt);

$cuil = $_SESSION['cuil'];

    

if ($password == $rpassword){
try {
    $conexion = new PDO("mysql:host=localhost; dbname=ecobicis", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET UTF8");

    $query = "UPDATE usuarios SET password = '$password' where cuil='$cuil'";
    $con = $conexion->prepare($query);
    $con->execute();

    header("location:../index.php?Var=3");

    

    // $pass_descifrada = password_verify($pass, $r['password']);

        
    
} catch (Exception $ex) {
    echo $ex->getMessage();
    echo $ex->getLine();
}

}else {
header("location:../web/editPass.php?error=1");    
}
