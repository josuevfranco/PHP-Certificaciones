<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilocontacto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
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
                  error_reporting(0); 
                # Iniciar sesión para usar $_SESSION
                session_start();

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
    <br><br>
    
    <nav id="navcont">
        <h1 class="titulo" style="text-align:center; font-size:35px;">Contáctanos</h1>
        <nav style=display:flex;>
            <div class="cont">
                <img src="images/contacto.jpg" alt="" width="350px" class="redondo">
            </div>
            <div class="cont">
                <form action="correo.php" method="post">
                    <input type="text" name="nombre" placeholder="Nombre completo" required><br>
                    <input type="text" name="email" placeholder="Email" required><br>
                    <input type="password" name="secret" placeholder="Password" required><br>
                    <input type="number" name="numero" placeholder="Número de teléfono"><br>
                    <input type="text" name="lugar" placeholder="Nombre de la Universidad o Empresa"><br><br>
                    <textarea name="mensaje" id="mensaje" cols="31" rows="7" placeholder="Mensaje"></textarea><br>
                    <input type="submit">
                </form>
                
            </div>
            <div class="cont">
                <h1 class="titulo">¿Te interesan nuestras certificaciones?</h1>
                <p id="texto">Llámanos al número 475 953 1506 <br><br>Nuestro horario de atención es: <br>Lunes a viernes de 9:00 a 16:00</p>
            </div>
        </nav>
    </nav>
    
    <br><br>
    <footer>
       <nav class="navf" style="background-color:dimgray;">
        <div id="divf texto"><img src="images/Logo2.png" alt="" width="400px"></div>
        <div id="divf" style="font-size:20px;"><a href="#">Aviso de Privacidad</a></div>
        <div id="divf" style="font-size:20px;"><a href="#">Acerca de</a></div>
        <div id="divf" style="font-size:20px;"><a href="#">Términos y condiciones</a></div>
       </nav>
        
    </footer>
</body>
</html>