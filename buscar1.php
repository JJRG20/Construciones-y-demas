<?php
session_start();
include("conexion1.php");
$conexion=conectar();
$sql="SELECT * FROM usuarios1";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
error_reporting(0);
$nom=$_SESSION['Nombre_us'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script>
        function seguro(){
            return confirm("¿Desea eliminar a este usuario?");
        }
    </script>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <table>
            <tr><h1>Buscador</h1></tr>
            <tr>
                <td>
                    <label>Id:</label>
                    <input type="number" name="Num">
                </td>
                <td>
                    <label> Usuario:</label>
                    <input type="text" name="Nombre_us">
                </td>
                <td>
                    <input class="bb btn btn-danger" type="submit" name="enviar" value="BUSCAR">
                </td>
                <td>
                    <a href="http://localhost/Consdemas/buscar1.php" class="bb btn btn-danger justify-content-end">Mostrar a todos</a>
                </td>
                <td>
                    <a href="http://localhost/Consdemas/perfil.php" class="bb btn btn-primary justify-content-end">Volver</a>
                </td>
            </tr>
        </table>
    </form>
    <table class="table">
        <thead class="table-success table-striped">
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
                <th>Administrador</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_POST['enviar'])){
                $usuario=$_POST['Nombre_us'];
                $num=$_POST['Num'];
                if(empty($_POST['Nombre_us']) && empty($_POST['Num'])){
                    $sql="SELECT * FROM usuarios1 WHERE Num=".$num;
                }else{
                    if(empty($_POST['Nombre_us'])){
                        $sql="SELECT * FROM usuarios1 WHERE Num=".$num;
                    }
                    if(empty($_POST['Num'])){
                        $sql="SELECT * FROM usuarios1 WHERE Nombre_us like '%".$usuario."%'";
                    }
                    if(!empty($_POST['Nombre_us']) && !empty($_POST['Num'])){
                        $sql="SELECT * FROM usuarios1 WHERE Num=".$num." and Nombre_us like '%".$usuario."%'";
                    }
                }
                $query=mysqli_query($conexion,$sql);
                while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php  echo $row['Num']?></td>
                        <td><?php  echo $row['Nombres']?></td>
                        <td><?php  echo $row['Apellidos']?></td>
                        <td><?php  echo $row['Nombre_us']?></td>
                        <td><?php  echo $row['Password']?></td>
                        <td><?php  echo $row['Email']?></td> 
                        <td><?php  echo $row['Fono']?></td>
                        <td><?php  echo $row['Direccion']?></td>
                        <td><?php  echo date("d-m-Y",strtotime($row['Fecha_nac']));?></td>
                        <td><?php  echo $row['Sexo']?></td>
                        <td><?php  echo $row['Marca_fav']?></td> 
                        <td><?php  echo $row['adm']?></td> 
                        <td><a href="actualiza1.php?id=<?php echo $row['Num'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="borrar1.php?id=<?php echo $row['Num'] ?>" onclick="return seguro()" class="btn btn-danger">Eliminar</a></td>
    
                    </tr>
                <?php 
                }
            }else{
                $sql="SELECT * FROM usuarios1";
                $query=mysqli_query($conexion,$sql);
                while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php  echo $row['Num']?></td>
                    <td><?php  echo $row['Nombres']?></td>
                    <td><?php  echo $row['Apellidos']?></td>
                    <td><?php  echo $row['Nombre_us']?></td>
                    <td><?php  echo $row['Password']?></td>
                    <td><?php  echo $row['Email']?></td> 
                    <td><?php  echo $row['Fono']?></td>
                    <td><?php  echo $row['Direccion']?></td>
                    <td><?php  echo date("d-m-Y",strtotime($row['Fecha_nac']));?></td>
                    <td><?php  echo $row['Sexo']?></td>
                    <td><?php  echo $row['Marca_fav']?></td> 
                    <td><?php  echo $row['adm']?></td> 
                    <td><a href="actualiza1.php?id=<?php echo $row['Num'] ?>" class="btn btn-info">Editar</a></td>
                    <td><a href="borrar1.php?id=<?php echo $row['Num'] ?>" onclick="return seguro()" class="btn btn-danger">Eliminar</a></td>

                </tr>
            <?php    
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>