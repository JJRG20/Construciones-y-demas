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
    <title>Construcciones y demás</title>
    <link rel="shortcut icon" href="Img_página/Brick.png">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
</head>
<body class="body">
    <div class="sticky-top">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light barra">
                <div class="dropdown blanco">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        |||
                    </button>
                    <ul class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item blanco" href="http://localhost/Consdemas/index.php">Página principal</a></li>
                        <li>
                            <?php
                            if($nom){ ?>
                                <li><a class="dropdown-item blanco" aria-current="page" href="http://localhost/Consdemas/perfil.php">Mi perfil</a></li>
                            
                            <?php }else{ ?>
                                <li>
                                    <a class="dropdown-item blanco" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Acceder</a>
                                </li>
                                <li><a class="dropdown-item blanco" href="http://localhost/Consdemas/usuario1.php">Registrarse</a></li>
                            <?php } ?>
                            
                        
                        </li>
                        
                        <li><a class="dropdown-item blanco" href="http://localhost/Consdemas/nosotros.php">Nosotros</a></li>
                    </ul>
                </div>
                <div class="container-fluid">
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li>
                                <?php
                                if($nom){ ?>
                                    <li><a class="nav-link yo" aria-current="page" href="#"><?php echo $nom ?> </a></li>
                                <?php } ?>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link blanco" aria-current="page" href="http://localhost/Consdemas/index.php">Página principal</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link blanco" href="http://localhost/Consdemas/nosotros.php">Nosotros</a>
                            <li>
                                <?php
                                if($nom){ ?>
                                    <li class="nav-item"><a class="nav-link blanco" aria-current="page" href="logout.php">Cerrar sesión</a></li>
                                
                                <?php }else{ ?>
                                    <li class="nav-item">
                                        <a class="nav-link blanco" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Acceder</a>
                                    </li>
                                <?php } ?>
                                
                            
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
        </header>
    </div>
    <br>

    <div class="titulo">
        <a class="p-2" title="Construcciones y demás" href="http://localhost/Consdemas/index.php">
            <img src="Img_página/Brick.png" alt="Construcciones y demás"></a>
            <div transition-style="in:wipe:left">
                <h1 class="p-4"><b>Construcciones y demás</b></h1>
            </div>
            
    </div><br>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content gradient">
                <div class="modal-header">
                    <p class="modal-title fs-5" id="exampleModalLabel">Ingrese su nombre y su contraseña</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="validar.php" method=POST>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Nombre de usuario:</label>
                                <input type="text" class="form-control" id="usuario" name="Nombre_us" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="contraseña" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="contraseña" name="Password" required>
                            </div>
                            
                            <div><a href="#">¿Olvidó su contraseña?</a></div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" id="checkbox">
                                <label class="form-check-label" for="checkbox">Recordar usuario</label>
                            </div>
                            
                            <button type="submit" class="bb btn btn-danger justify-content-end">Login</button>
                            <a href="http://localhost/Consdemas/usuario1.php" class="bb btn btn-danger justify-content-end">Registrarse</a>
                            
                        </div>
                        
                    </form>
                </div>
             
            </div>
        </div>
    </div><br><br>


    <div class="perfil">
        <h2>Mi perfil</h2><br>
        <div id="for3">
            
            <?php
            $sql="SELECT * FROM usuarios1 WHERE Nombre_us='$nom'";
            $query=mysqli_query($conexion,$sql);
            while($row=mysqli_fetch_array($query)){
                ?>
                    
                    <div class="my"><p>Nombre:</p></div>
                    <div class="my"><?php  echo $row['Nombre_us']?></div>
                    <div class="my"><p>Correo:</p></div>
                    <div class="my"><?php  echo $row['Email']?></div>
                    <div class="my"><p>Teléfono:</p></div>
                    <div class="my"><?php  echo $row['Fono']?></div>
                    <div class="my"><p>Marca favorita:</p></div>
                    <div class="my"><?php  echo $row['Marca_fav']?></div>
                    <div>
                        
                    </div>
                    <div class="ri"><a href="actualiza2.php?id=<?php echo $row['Num'] ?>" class="btn btn-info">Editar</a>
                        <?php
                        if($row['adm']==1){ ?>
                            <a href="buscar1.php" class="btn btn-dark">Usuarios</a>
                        <?php } ?>
                    </div>
                    

                    
                <?php 
            } ?>
        </div>
        
    </div><br><br>
    
    
    <div class="card anuncio1">
        <a href="https://register.koggames.com/elswordonline?site=googledisplaylatam&gclid=Cj0KCQjwiZqhBhCJARIsACHHEH_APO-7XPblBKRo3lHvHcaxc90dGrDEiN-LQi9ED9gTmBOaMV5DQ6oaAm-HEALw_wcB">
            <img src="Img_página/Elsword.png" class="card-img-top" alt="Elsword"></a>
        <div class="card-body">
            <a href="https://register.koggames.com/elswordonline?site=googledisplaylatam&gclid=Cj0KCQjwiZqhBhCJARIsACHHEH_APO-7XPblBKRo3lHvHcaxc90dGrDEiN-LQi9ED9gTmBOaMV5DQ6oaAm-HEALw_wcB">Juega ahora</a>
        </div>
    </div>
    <br>
    

    <footer class="footer">
        <div class="pie">
            <div></div>
            <div class="ce"><h4>Copyright© 2023</h4></div>
            <div></div>
            <div class="ce"><h6>Instagram: @Construcciones_y_demás</h5></div>
            <div></div>
            <div class="ce"><h6>Correo: Cons_demas@gmail.com</h5></div>
    
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>