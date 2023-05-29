<?php

function conectar(){
    $host="localhost";
    $user="root";
    $pass="juan0814";
    $bd="consdemas";

    $conexion=mysqli_connect($host,$user,$pass);
    mysqli_select_db($conexion,$bd);

    return $conexion;
}



?>