<?php
session_start();
include("conexion1.php");
$conexion=conectar();
$usuario=$_POST['Nombre_us'];
$password=$_POST['Password'];

$sql="SELECT * FROM usuarios1 WHERE Nombre_us='$usuario' and Password='$password'";

$query=mysqli_query($conexion,$sql);
if($query->num_rows==0){
    $_SESSION['errorLogin']="Nombre y/o contraseña no válidos.";
    Header("Location: index.php");
}
else{
    $query=mysqli_query($conexion,$sql);
    $row=$query[8];
    $_SESSION['Nombre_us']=(object)[
        'Email'=>$query[6],
        'Nombres'=>$query[1],
        'Apellidos'=>$query[2],
        'adm'=>$query[8]
    ];
    if($row==1){
        Header("Location: buscar1.php");
        exit();
    }
    else{
        Header("Location: index.php");
        exit();
    }
}
?>