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
$adm=$_POST['adm'];


$sql="INSERT INTO usuarios1 VALUES('$num','$nombres','$apellidos','$usuario','$password','$pre','$res','$email','$fono','$direccion','$fecha','$sexo','$marca','$adm')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: index.php");
    
}
else {
}
?>