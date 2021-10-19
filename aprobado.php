
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APROBADO</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/miestilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos3.css">
    <script src="https://kit.fontawesome.com/62034752b0.js" crossorigin="anonymous"></script>
    
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
        
        #centrar {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
        }
        
        #c{
          text-align: center;        
        }
    </style>
</head>


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
    
    <br><br><br><br>
    <div>
        <img src="images/aprobaste.png" id="centrar">
    </div>
    
    
    <?php 
    error_reporting(0);
    //LLENAR EL ARCHIVO PARA QUE YA NO PUEDA VOLVER A REGISTRARSE
        
        $certificacion = "java";
        $calif = $_SESSION['calif'];
        $user = $_SESSION['usuario'];
        $status = "aprobado";
        $date = date('Y/m/d')."-".date("h:i:sa");
    

        $file = fopen("archivo2.txt","a+");

        fwrite($file, $certificacion." ".$calif." ".$user." ".$status." ".$date."\r\n");
        fclose($file);

    ?> 
    
    <br><br>
    <div>
        <?php
         echo '<h4 id="c" style="color:red";> CALIFICACIÓN:'.$_SESSION['calif'].'</h4>'; ?>
         <div id="c">     
        <i id="c" class="fas fa-stamp">JAVA CERTIFICATION</i><br><br><br>
         </div>
        <div>
            <form id="c" action="prueba.php" method="post">
                  <label for="lname">POR SEGURIDAD, INGRESA TU NOMBRE COMPLETO NUEVAMENTE:</label><br>
                  <input type="text" id="lname" name="lname" value="Nombre"><br><br>
                  <input style="color:red"; type="submit" value="DESCARGA TU RECONOCIMIENTO DE CERTIFICACIÓN EN JAVA">                
            </form>
        </div> 
        <a href="index.php" id="c"> <h4 style="color:red";> - >REGRESAR A LA PÁGINA INICIO< - </h4>  </a>
    </div> 