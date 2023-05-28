<?php

include("conexion1.php");
$conexion=conectar();

$nombres=$_POST['Nombres'];
$apellidos=$_POST['Apellidos'];
$usuario=$_POST['Nombre_us'];
$password=$_POST['Password'];
$email=$_POST['Email'];
$fono=$_POST['Fono'];
$direccion=$_POST['Direccion'];
$fecha=$_POST['Fecha_nac'];
$sexo=$_POST['Sexo'];
$marca=$_POST['Marca_fav'];



$sql="UPDATE usuarios1 SET Nombres='$nombres',Apellidos='$apellidos',Nombre_us='$usuario',Password='$password',Email='$email',Fono='$fono',Direccion='$direccion',Fecha_nac='$fecha',Sexo='$sexo',Marca_fav='$marca' WHERE Nombre_us='$usuario'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: act_bor.php");
    }
?>