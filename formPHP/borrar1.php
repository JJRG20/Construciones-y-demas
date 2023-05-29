<?php

include("conexion1.php");
$conexion=conectar();

$usuario=$_GET['id'];

$sql="DELETE FROM usuarios1  WHERE Nombre_us='$usuario'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: act_bor.php");
    }
?>