<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C++ Certificación</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VJDEV</title>
    <link rel="stylesheet" href="css/miestilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos3.css">
    
    <style>
        .aside3, .aside4{
            flex-grow: 1;
            background-color: whitesmoke;
            margin: 4px;
            padding: 15px;
            align-items: center;
            text-align: center;
            width: 0;
        }
        
        #contenedor{
            display: flex;            
            flex-wrap: wrap;
        }

        body, html {
          height: 100%;
          margin: 0;
        }

        .bgimg {
          background-image: url('images/php33.jpg');
          height: 90%;
          background-position: center;
          background-size: cover;
          position: relative;
          color: white;
          font-family: "Courier New", Courier, monospace;
          font-size: 25px;
          margin: 8%;
        }

        .topleft {
          position: absolute;
          top: 0;
          left: 16px;
        }

        .bottomleft {
          position: absolute;
          bottom: 0;
          left: 16px;
        }

        .middle {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          text-align: center;
        }

        hr {
          margin: auto;
          width: 40%;
        }
    </style>
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
    <h1 class="h11">Opciones de Certificación en C++</h1>
    
    <hr>
    
    <h2 class="h11" style="color:black";>Ventajas de la Certificación</h2>
    <nav class="empezar">
        <div id="div2">Las ventajas que tiene C++ sobre otros lenguajes de programación son las siguientes: <br>
        <br>
        <ul>
            <li>Tiene un alto rendimiento.</li>
            <li>Es un lenguaje que se está actualizando, y, por lo tanto, a pesar de tener más de 20 años es moderno.</li>
            <li>Es multiplataforma.</li>
        </ul>
       <br><br>
        </div>
        <div id="div2">
            <img src="images/cplus.jpg" alt="Empezar" width="65%" height="65%">
        </div>
    </nav>
    
    
    <h2 class="h11" style="color:black";>Sobre el Examen</h2>
    <nav class="empezar">
        <div id="div2">El examen de PHP se realizará a través de Internet, en cualquier momento y desde cualquier lugar. El examen consta de 20 preguntas de opción múltiple o de verdadero / falso. El examen tiene un límite de tiempo de 30 minutos. 
        <br> Los candidatos deben tener un 75% de respuestas correctas para aprobar el examen y obtener la certificación. Los candidatos que tengan más del 95% de respuestas correctas obtendrán una notación de grado de excelencia agregado a su certificado. <br>
        Costo: $2,500
        </div>
        <div id="div2">
            <img src="images/cplus2.jpg" alt="Empezar" width="65%" height="65%">
        </div>
    </nav>
    
    <hr>
    <hr>
    
    <div class="bgimg">
      <div class="topleft">
        <p><img src="images/logofinal.png" alt=""></p>
      </div>
      <div class="middle">
        <h1>Próximamente Disponible</h1>
        <hr>
        <p>35 días restantes</p>
      </div>
      <div class="bottomleft">
        <p>Es un lenguaje que permite tanto alto, como bajo nivel de programación, para optimizar nuestro programa.</p>
      </div>
    </div>
    
    
    <footer>
       <nav class="navpar" style="background-color:dimgray;">
        <div id="divf texto"><img src="images/logofinal2.png" alt="" width="400px"></div>
        <div id="divf" style="font-size:20px;"><a href="#">Aviso de Privacidad</a></div>
        <div id="divf" style="font-size:20px;"><a href="#">Acerca de</a></div>
        <div id="divf" style="font-size:20px;"><a href="#">Términos y condiciones</a></div>
       </nav>
        
    </footer>
    
    
    
</body>
</html>