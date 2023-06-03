<?php 
    include("conexion1.php");
    $conexion=conectar();

$num=$_GET['id'];

$sql="SELECT * FROM usuarios1 WHERE Num='$num'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Actualizar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="up1.php" method="POST">
                    
                                <input type="hidden" name="Num" value="<?php echo $row['Num']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres" value="<?php echo $row['Nombres']  ?>" required>
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>" required>
                                <input type="text" class="form-control mb-3" name="Nombre_us" placeholder="Nombre de usuario" value="<?php echo $row['Nombre_us']  ?>" required>
                                <input type="password" class="form-control mb-3" name="Password" placeholder="Contraseña" value="<?php echo $row['Password']  ?>" required>
                                <input type="text" class="form-control mb-3" name="Email" placeholder="Email" value="<?php echo $row['Email']  ?>" required>
                                <div><input list="Pre" class="form-control mb-3" name="Pre" placeholder="Para tu contraseña..." value="<?php echo $row['Pre']  ?>" required>
                                    <datalist id="Pre">
                                        <option>¿Cuál es tu comida favorita?</option>
                                        <option>¿Cuál es el nombre de tu mascota?</option>
                                        <option>¿Cuál es tu película favorita?</option>
                                    </datalist>
                                </div>
                                <input type="text" class="form-control mb-3" name="Res" placeholder="Respuesta" value="<?php echo $row['Res']  ?>" required>
                                <input type="tel" class="form-control mb-3" name="Fono" placeholder="Teléfono" value="<?php echo $row['Fono']  ?>" required>
                                <input type="text" class="form-control mb-3" name="Direccion" placeholder="Dirección" value="<?php echo $row['Direccion']  ?>" required>
                                <input type="date" class="form-control mb-3" name="Fecha_nac" placeholder="Fecha de nacimiento" value="<?php echo $row['Fecha_nac']  ?>" required>
                                <input list="Sexo" class="form-control mb-3" name="Sexo" placeholder="Sexo" value="<?php echo $row['Sexo']  ?>" required>
                                    <datalist id="Sexo">
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                        <option>Otro</option>
                                    </datalist>
                                <input list="Marca" class="form-control mb-3" name="Marca_fav" placeholder="Marca favorita" value="<?php echo $row['Marca_fav']  ?>" required>
                                    <datalist id="Marca">
                                        <option>Lego</option>
                                        <option>Megablox</option>
                                        <option>Kre-o</option>
                                        <option>Otra</option>
                                    </datalist>
                        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>