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
    <title>Construcciones y demás</title>
    <link rel="shortcut icon" href="Img_página/Brick.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <style>
        .body{
            background-color: yellow;
            
        }
        nav{
            
            width: 100%;
            background-color: gold;
            border-bottom: red 2px solid;
            font-family: Arial, Helvetica, sans-serif; 
            padding: 10px;
            
            
        }
        .car img{
            width: 100%;
            height: auto;
            
        }
        .yellow{
            background-color: greenyellow;
            font-size: 75px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .blanco{
            text-decoration: none;
            background-color: red;
            border-radius: 8px;
            margin-right: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .blanco:hover{
            background-color: white;
        }
        .anuncionos{
            background-color: white;
            height: 520px;
        }

        .centro{
            display: grid;
            grid-template-columns: auto;
        }
        .centro div{
            margin-left: auto;
            margin-right: auto;
        }
        #centro2{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        #centro2 div{
            margin-left: auto;
            margin-right: auto;
        }
        .ri{
            margin-left: auto;
        }
        .le{
            margin-right: auto;
        }
        .ce{
            margin-left: auto;
            margin-right: auto;
        }
        h1{
            font-size: 300%;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        h3{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .intro{
            
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        #muestra{
            width: 300px;
        }
        .pie{
            display: grid;
            grid-template-columns: 40% 20% 40%;
            
        }
        .pie div{
            
            margin-top: 30px;
        
        }
        #for1{
            display: grid;
            grid-template-columns: auto auto;
            width: 420px;
            height: 225px;
            background-color: gold;
            border: red 2px solid;
            margin-left: auto;
            margin-right: auto;
        }
        #for1 div{
            padding: 5px;
        }
        .datos{
            font-size: 150%;
        }
        #for2{
            display: grid;
            grid-template-columns: auto auto;
            width: 400px;
            height: 535px;
            background-color: gold;
            border: red 2px solid;
            margin-left: auto;
            margin-right: auto;
        }
        #for2 div{
            padding: 5px;
        }
        form{
            font-family: Arial, Helvetica, sans-serif;
        }

        .nosotros{
            text-align: justify;
            padding: 10px;
            background-color: orange;
            border: red 2px solid;
            
            height: max-content;
            
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
        }
        .caja{
            display: grid;
            grid-template-columns: 15% auto 15%;
            margin-right: auto;
            margin-left: auto;
        }

        .fight{
            padding-left: 10px;
        }

        .accion{
            width: 100%;

        }
        .anuncio1{
            padding: 0%;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
        }
        .anuncio1 div{
            padding: 0%;
        }
        .anuncio3{
            padding: 0%;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }
        .anuncio3 div{
            padding: 0%;
        }
        .pad0{
            padding: 0%;
        }
        iframe{
            height: 250px; 
            width: 365px;
        }
        .titulo{
            display: grid;
            grid-template-columns: 100px auto ;
        }
        .footer{
            background-color: gold;
            width: 100%;
            height: 175px;
            position: absolute;
            border-top: red 2px solid;
            font-family: 'Times New Roman', Times, serif; 
            padding-top: 10px;
        
        }
        .accion2{
            height: 175px;
        }
        .accion2:hover{
            transform: scale(1.5);
            
        }
        #otro{
            display: grid;
            grid-template-columns:auto auto auto;
            width: 100%;
            padding: 10px;
            background-color: greenyellow;
            border: red 2px solid;
            margin-left: auto;
            margin-right: auto;
        
        }
        #otro div{
            color: red;
            width: 100%;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 110%;
            text-align: center;
        }
        .black{
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .bb{
            width: 110px;
            height: 40px;
            text-decoration: none;
            color: white;
        }
        .bb:hover{
            background-color: red;
        }
        .gradient{
            background: linear-gradient(-45deg,yellow,orange,red);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
            box-shadow: 0px 0px 20px black;

        }
        @keyframes gradient{
            0%{
                background-position: 0% 50%;
            }
            50%{
                background-position: 100% 50%;
            }
            100%{
                background-position: 0% 50%;
            }
        }
    </style>
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
                        <li><a class="dropdown-item blanco" href="http://localhost/Consdemas/formPHP/index.php">Página principal</a></li>
                        <li><a class="dropdown-item blanco" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Acceder</a></li>
                        <li><a class="dropdown-item blanco" href="http://localhost/Consdemas/formPHP/usuario1.php">Registrarse</a></li>
                        <li><a class="dropdown-item blanco" href="http://localhost/Consdemas/formPHP/nosotros.php">Nosotros</a></li>
                    </ul>
                </div>
                <div class="container-fluid">
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link blanco" aria-current="page" href="http://localhost/Consdemas/formPHP/index.php">Página principal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link blanco" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Acceder</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link blanco" href="http://localhost/Consdemas/formPHP/nosotros.php">Nosotros</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
        </header>
    </div>
    <br>

    <div class="titulo">
        <a class="p-2" title="Construcciones y demás" href="http://localhost/Consdemas/formPHP/index.php">
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
                    <form>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Nombre de usuario:</label>
                                <input type="text" class="form-control" id="usuario" name="user" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="contraseña" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="contraseña" name="password" minlength="8" required>
                            </div>
                            
                            <div><a href="#">¿Olvidó su contraseña?</a></div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" id="checkbox">
                                <label class="form-check-label" for="checkbox">Recordar usuario</label>
                            </div>
                            
                            <button type="submit" class="bb btn btn-danger justify-content-end">Login</button>
                            <a href="http://localhost/Consdemas/formPHP/usuario1.php" class="bb btn btn-danger justify-content-end">Registrarse</a>
                            
                        </div>
                        
                    </form>
                </div>
             
            </div>
        </div>
    </div>
    <div class="caja">
        <div class="anuncio3">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img class="accion" src="Img_página/accion.jpg" alt="Acción"></a>
        </div>
        <div class="nosotros">
            <p>Lo que nosotros buscamos es descubrir a nuevos constructores que quieran compartir su creatividad
                con el mundo.<br><br>Siempre hemos tenido una fascinación por los juguetes de construcción, la
                capacidad de hacer volar nuestra imaginación con lo que creamos, sin limitaciones, y poder
                apreciar las creaciones de los demás.<br><br>Nuestro fundador tuvo la idea de crear este página web
                con el objetivo de expandir el gusto por este arte.
            </p>
        </div>
        <div class="card anuncio3">
            <a href="https://register.koggames.com/elswordonline?site=googledisplaylatam&gclid=Cj0KCQjwiZqhBhCJARIsACHHEH_APO-7XPblBKRo3lHvHcaxc90dGrDEiN-LQi9ED9gTmBOaMV5DQ6oaAm-HEALw_wcB">
                <img src="Img_página/Elsword.png" class="card-img-top" alt="Elsword"></a>
            <div class="card-body">
                <a href="https://register.koggames.com/elswordonline?site=googledisplaylatam&gclid=Cj0KCQjwiZqhBhCJARIsACHHEH_APO-7XPblBKRo3lHvHcaxc90dGrDEiN-LQi9ED9gTmBOaMV5DQ6oaAm-HEALw_wcB">Juega ahora</a>
            </div>
            <a href="https://register.koggames.com/elswordonline?site=googledisplaylatam&gclid=Cj0KCQjwiZqhBhCJARIsACHHEH_APO-7XPblBKRo3lHvHcaxc90dGrDEiN-LQi9ED9gTmBOaMV5DQ6oaAm-HEALw_wcB">
                <img src="Img_página/Elsword.png" class="card-img-top" alt="Elsword"></a>
            <div class="card-body">
                <a href="https://register.koggames.com/elswordonline?site=googledisplaylatam&gclid=Cj0KCQjwiZqhBhCJARIsACHHEH_APO-7XPblBKRo3lHvHcaxc90dGrDEiN-LQi9ED9gTmBOaMV5DQ6oaAm-HEALw_wcB">Juega ahora</a>
            </div>
            <a href="https://register.koggames.com/elswordonline?site=googledisplaylatam&gclid=Cj0KCQjwiZqhBhCJARIsACHHEH_APO-7XPblBKRo3lHvHcaxc90dGrDEiN-LQi9ED9gTmBOaMV5DQ6oaAm-HEALw_wcB">
                <img src="Img_página/Elsword.png" class="card-img-top" alt="Elsword"></a>
            <div class="card-body">
                <a href="https://register.koggames.com/elswordonline?site=googledisplaylatam&gclid=Cj0KCQjwiZqhBhCJARIsACHHEH_APO-7XPblBKRo3lHvHcaxc90dGrDEiN-LQi9ED9gTmBOaMV5DQ6oaAm-HEALw_wcB">Juega ahora</a>
            </div>
        </div>
      
    </div><br>
    
    <div class="container car">
        <div id="otro" class="row align-items-start">
            <div>
                <p class="black">Algunos ejemplos creativos:</p>
            </div>
            <div></div>
            <div></div>
            <div class="col d-flex justify-content-around">
                <div>
                    <img title="Abeja feliz" class="accion2" src="Img_página/ej1.jpg" alt="Abeja feliz">
                    <p>Abeja feliz</p>
                </div>
                
            </div>
            <div class="col d-flex justify-content-around">
                <div>
                    <img title="Auto moderno" class="accion2" src="Img_página/ej2.jpg" alt="Auto moderno">
                    <p>Auto moderno</p>
                </div>
                
            </div>
            <div class="col d-flex justify-content-around">
                <div>
                    <img title="Robot" class="accion2" src="Img_página/ej3.jpg" alt="Robot">
                    <p>Robot</p>
                </div>
                
            </div>
            
        </div><br>
    </div>
    
    
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