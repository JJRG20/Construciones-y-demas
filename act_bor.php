<?php

include("conexion1.php");
$conexion=conectar();

$sql="SELECT * FROM usuarios1";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
                    <div class="row"> 
                        
                        
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Email</th>
                                        <th>Fono</th>
                                        <th>Dirección</th>
                                        <th>Fecha_nacimiento</th>
                                        <th>Sexo</th>
                                        <th>Marca_favorita</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Num']?></th>
                                                <th><?php  echo $row['Nombres']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>
                                                <th><?php  echo $row['Nombre_us']?></th>
                                                <th><?php  echo $row['Password']?></th>
                                                <th><?php  echo $row['Email']?></th> 
                                                <th><?php  echo $row['Fono']?></th>
                                                <th><?php  echo $row['Direccion']?></th>
                                                <th><?php  echo date("d-m-Y",strtotime($row['Fecha_nac']));?></th>
                                                <th><?php  echo $row['Sexo']?></th>
                                                <th><?php  echo $row['Marca_fav']?></th>  
                                                <th><a href="actualiza1.php?id=<?php echo $row['Nombre_us'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="borrar1.php?id=<?php echo $row['Nombre_us'] ?>" class="btn btn-danger">Eliminar</a></th>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                      
            </div>
            
</body>
</html>