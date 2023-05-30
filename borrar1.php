<?php

include("conexion1.php");
$conexion=conectar();

$num=$_GET['id'];

$sql="DELETE FROM usuarios1  WHERE Num='$num'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: act_bor.php");
    }
?>