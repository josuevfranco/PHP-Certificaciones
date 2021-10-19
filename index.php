<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VJDEV</title>
    <link rel="stylesheet" href="css/miestilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
</head>
<body>
   
   <header>
    <nav id="navmenu" class="nav justify-content-center">
        
            <a class="logo"><img src="images/Logo.jpg" alt="Logo" width="80px"></a>
        
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
    
    
    <!------CARRUSEL------>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner centrar">
            <div class="item active centrar">
              <img src="images/c++.png" alt="Certificacion C++" width="1000px" style="width: 100%; height: auto;">
            </div>

            <div class="item centrar">
              <img src="images/Java.png" alt="Certificación Java" style="width: 100%; height: auto;">
            </div>

            <div class="item centrar">
              <img src="images/php.png" alt="Certificación PHP" width="1000px" style="width: 100%; height: auto;">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Sig</span>
          </a>
        </div>
    <br><br><br>
    
    
    <!------MI CUENTA------>
    <nav class="cuentauser">
        <div class="micuenta">
           <br><br><br>
            <h2 class="titulo">Mi Cuenta</h2>
            <br><br>
            <p id="texto">Ingresa aquí a tu cuenta para tener acceso a tus certificaciones virtuales en cualquier momento.</p>
            <p id="texto">Te recordamos que estés al pendiente del nuevo contenido que se agrega en este sitio.</p> <br>
            <a href="login.php" id="texto">Entra aquí</a>
        </div>
        <div class="micuenta">
            <img src="images/mi%20cuenta.jpg" alt="" width="650px">
        </div>
    </nav>
    <br><br>
    
    <!-------PARALLAX-------->
    <div class="parallax"></div>

        <div style="height:1000px;background-color:white;font-size:36px;">
        <br><br>
        <h1 class="titulo" style="margin-left: 50px;">Certificaciones</h1>
        <p style="font-family: monospace; font-size: 23px; margin-left: 50px; justify-content: center;">Aquí podrás encontrar los exámenes de certificación que tenemos, adaptables a tus necesidades.</p>
        <a href="certificaciones.php" style="font-family: monospace; font-size: 23px; margin-left: 50px; justify-content: center;">Más información ></a>
        <br><br>
        <h2 class="titulo" style="margin-left: 50px;">¿Por qué certificarte con nosotros?</h2>
        <nav class="navpar" id="margen">
            <div id="divpara">
                <h2 class="titulo">Éxito en certificaciones</h2>
                <p id="texto" >Éxito de personas certificadas: 90%. <br>Oportunidades de empleo: 99%.</p>
                <img src="images/Certificaciones.jpg" alt="" class="img-responsive" width="300px">
            </div>
            <div id="divpara">
                <h2 class="titulo">Oportunidad laboral</h2>
                <p id="texto">También te ayudamos a obtener un empleo, al mismo tiempo que te certificas.</p>
                <img src="images/OportunidadLab.jpg" alt="" class="img-responsive" width="300px">
            </div>
            <div id="divpara">
                <h2 class="titulo">Desarrollo profesional</h2>
                <p id="texto">Obtienes habilidades que te ayudarán en tu vida profesional.</p>
                <img src="images/DesarrolloProf.jpg" alt="" class="img-responsive" width="300px">
            </div>
        </nav>
        </div>
    <div class="parallax"></div>
    
    <br><br>
    <footer>
       <nav class="navpar" style="background-color:dimgray;">
        <div id="divf texto"><img src="images/Logo2.png" alt="" width="400px"></div>
        <div id="divf" style="font-size:20px;"><a href="#">Aviso de Privacidad</a></div>
        <div id="divf" style="font-size:20px;"><a href="acercade.php">Acerca de</a></div>
        <div id="divf" style="font-size:20px;"><a href="#">Términos y condiciones</a></div>
       </nav>
        
    </footer>
    <br><br>
    <script src="js/funciones.js"></script> 
</body>
</html>