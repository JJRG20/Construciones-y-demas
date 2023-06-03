<?php

include("conexion1.php");
$conexion=conectar();

$num=$_POST['Num'];
$nombres=$_POST['Nombres'];
$apellidos=$_POST['Apellidos'];
$usuario=$_POST['Nombre_us'];
$password=$_POST['Password'];
$pre=$_POST['Pre'];
$res=$_POST['Res'];
$email=$_POST['Email'];
$fono=$_POST['Fono'];
$direccion=$_POST['Direccion'];
$fecha=$_POST['Fecha_nac'];
$sexo=$_POST['Sexo'];
$marca=$_POST['Marca_fav'];



$sql="UPDATE usuarios1 SET Nombres='$nombres',Apellidos='$apellidos',Nombre_us='$usuario',Password='$password',Pre='$pre',Res='$res',Email='$email',Fono='$fono',Direccion='$direccion',Fecha_nac='$fecha',Sexo='$sexo',Marca_fav='$marca' WHERE Num='$num'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: perfil.php");
    }
?>