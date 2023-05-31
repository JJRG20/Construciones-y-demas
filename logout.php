<?php
session_start();
include("conexion1.php");
$conexion=conectar();

if(isset($_SESSION['Nombre_us'])){
    unset($_SESSION['Nombre_us']);
    Header("Location: index.php");
}
?>