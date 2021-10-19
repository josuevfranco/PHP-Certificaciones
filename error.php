<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/miestilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos3.css">
</head>
<body>

   <header>
    <nav id="navmenu" class="nav justify-content-center">
        
            <a class="logo"><img src="images/logofinal.png" alt="Logo" width="80px"></a>
        
        <ul>
        <li><a href="index.php">INICIO</a></li>
        <li><a href="certificaciones.php">CERTIFICACIONES</a></li>
        <li><a href="contacto.php">CONTACTO</a></li>
        <li><a href="acercade.php">ACERCA DE</a></li>
        <li>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MI CUENTA
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="registro.php">REGISTRATE</a>
                <?php

                # Iniciar sesión para usar $_SESSION
                session_start();
                error_reporting(0); 
                if (empty($_SESSION["usuario"])) {
                    echo "<a class='dropdown-item' href='login.php'>INICIA SESIÓN</a>";
                }else{
                    $nombre = $_SESSION["usuario"]; 
                    echo "<a class='dropdown-item' href='cerrarsesion.php'>CERRAR SESIÓN</a>";
                    echo "<a class='dropdown-item' href='login.php'>Usuario: $nombre</a>";
                }

                ?>
              </div>
            </div>
        </li>
        </ul>
    </nav>
    </header>
    
    <br><br><br>
    <h2 class="h11" style="color:red";>DATOS INCORRECTOS</h2>
    <nav class="empezar">
        <div id="div2">Los datos que ingresaste no coinciden con los que tenemos almacenados en nuestro sistema, por favor inténtalo de nuevo o crea una cuenta para poder acceder y poder certificarte con los mejores.
       <br><br>
       <?php
        $previous = "javascript:history.go(-1)";
        if(isset($_SERVER['HTTP_REFERER'])) {
               $previous = $_SERVER['HTTP_REFERER'];
        }

        echo '<a href="login.php">Regresar a la página Anterior</a>';
        ?>
        </div>
        <div id="div2">
            <img src="images/homero.png" alt="Empezar" width="100%" height="100%">
        </div>
    </nav>
    
</body>
</html>