<?php
include("conexion1.php");
$conexion=conectar();

$num=$_POST['Num'];
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
$adm=$_POST['adm'];


$sql="INSERT INTO usuarios1 VALUES('$num','$nombres','$apellidos','$usuario','$password','$email','$fono','$direccion','$fecha','$sexo','$marca','$adm')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: usuario1.php");
    
}
else {
}
?>