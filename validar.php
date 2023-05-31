<?php
session_start();
include("conexion1.php");
$conexion=conectar();
$usuario=$_POST['Nombre_us'];
$password=$_POST['Password'];

$sql="SELECT * FROM usuarios1 WHERE Nombre_us='$usuario' and Password='$password'";
$query= mysqli_query($conexion,$sql);

$row=mysqli_num_rows($query);
if($row){
    if($row=mysqli_fetch_assoc($query)){
        $_SESSION['Nombre_us']=$row['Nombre_us'];
    }
    Header("Location: index.php");

}
else{
    ?>
    <?php
    $_SESSION['d-log']=1;
    Header("Location: index.php");
    exit

    ?>
    <?php
}
$row=mysqli_free_result($query);

?>