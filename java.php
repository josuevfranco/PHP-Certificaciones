<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Java Certificación</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <h1 class="h11">Opciones de Certificación en JAVA</h1>
    <section class="parte3"> 
        
        <div class="p3">
            <h4 class="tramCat1">Ventajas de la Certificación</h4>
            <hr style="height:2px;border-width:0;color:red;background-color:red">
            <p id="tramCat">
                <a class="referencia1" href="#">1. Posibilidad de un pago mayor</a>
                <br>
                <a class="referencia1" href="#">2. Aborde su brecha de habilidades y conocimientos.</a>
                <br>
                <a class="referencia1" href="#">3. Gran demanda de desarrolladores de conocimientos de Java</a>
                <br>
                <a class="referencia1" href="#">4. La certificación reconocida por la industria de TI es JAVA</a>
                <br>
                <a class="referencia1" href="#">5. Aumente la confianza en su carrera</a>
            </p>
            <img class="img" src="imgJava/competencias_laborales%20(1).jpg" alt="">
        </div>
        
        <div class="p3">
            <h4 class="tramCat1">Puntuación Aprobatoria</h4>
            <hr style="height:2px;border-width:0;color:red;background-color:red">
            <p id="tramCat">
                <a class="referencia1" href="#"></a>
                <br><br><br><br>
                <a class="referencia1" href="#">Acertar al menos 5</a>
                <br>
                <a class="referencia1" href="#">respuestas correctamente</a>
                <br>
                <a class="referencia1" href="#"></a>
            </p>
            <img class="img" src="imgJava/2.png" alt="">
        </div>
        
        <div class="p3">
            <h4 class="tramCat1">Total de Preguntas y tiempo de aplicación</h4>
            <hr style="height:2px;border-width:0;color:red;background-color:red">
            <p id="tramCat">
                <a class="referencia1" href="#"></a>
                <br><br><br><br>
                <a class="referencia1" href="#">Fácil y Rápido</a>
                <br>
                <a class="referencia1" href="#">6 preguntas en total</a>
                <br>
                <a class="referencia1" href="#"> (20 minutos para contestarlas)</a>
            </p>
            <img class="img" src="imgJava/3.png" alt="">
        </div>
        
        <div class="p3">
            <h4 class="tramCat1">Disponibilidad y Datos Extra</h4>
            <hr style="height:2px;border-width:0;color:red;background-color:red">
            <p id="tramCat">
                <a class="referencia1" href="#"></a>
                <br><br><br>
                <a class="referencia1" href="#">Disponible TODO EL AÑO</a>
                <br>
                <a class="referencia1" href="#">Costo: $1,200</a>
                <br>
                <a class="referencia1" href="#"> <strong>EL EXAMEN ES EN INGLÉS</strong> </a>
            </p>
            <img class="img" src="imgJava/4.png" alt="">
        </div>
        
    </section>
    
    <hr>
    
    <nav class="empezar">
        <div id="div2">
            No esperes más, empieza tu registro ahora.
            Incrementa las posibilidades de obtener empleo. Permite al trabajador diversificarse y desempeñarse en nuevas áreas de trabajo. Genera una diferencia con otros desarrolladores. <br> <br>
            <?php
                # Iniciar sesión para usar $_SESSION
                //session_start();
                error_reporting(0); 
            
                if (empty($_SESSION["usuario"])) {
                    $band = 1;
                }else{ 
                    $band = 2;
                }
            
                $nombre = "";
                $nombre = $_SESSION["usuario"];
                $file=fopen("archivo2.txt", "r");
                 
            
                while(!feof($file)){
                    $linea=fgets($file);
                    if ($linea != ""){
                      $aux=preg_split("/[\s,]+/",$linea);  
                      $user = $aux[2];
                      
                       if ($user === $nombre){            
                          $band = 0;
                          echo '<a href="#"><button style=color:red;background-color:white;font-size:25px;>YA NO PUEDES REALIZAR ESTA PRUEBA, PERDISTE TU OPORTUNIDAD</button></a>';
                          break;
                       }
                        
                    }
                }   
                fclose($file);                
                

                switch($band){
                    case 1:
                        echo '<a href="login.php"><button style=color:red;background-color:white;font-size:25px;>INICIA SESIÓN Y EMPIEZA TU CERTIFICACIÓN</button></a>'; 
                        break;
                    case 2:
                        echo '<a href="examen.php"><button style=color:red;background-color:white;font-size:25px;>EMPIEZA CERTIFICACIÓN</button></a>';     
                        break;
                }

            ?>
        </div>
        <div id="div2">
            <img src="images/animalista.jpeg" alt="Empezar">
        </div>
    </nav>
    
    <hr>
    
        <div id="contenedor">
         <div class="aside3">
            <div class="card" class="aside1">
              <img src="galeria/actuallyme.jpg" alt="John" style="width:100%">
              <h1>Josué</h1>
              <p class="title">CEO & Fundador de la Organizacón</p>
              <p>Universidad Autónoma de Aguascalientes</p>
              <div style="margin: 24px 0;">
                <a href="#"><i class="fa fa-dribbble"></i></a> 
                <a href="#"><i class="fa fa-twitter"></i></a>  
                <a href="#"><i class="fa fa-linkedin"></i></a>  
                <a href="#"><i class="fa fa-facebook"></i></a> 
              </div>
              <p><button class="boton">Contacto</button></p>
            </div>
        </div>
        
        <div class="aside4">
            <div class="card">
              <img src="galeria/WhatsApp%20Image%202020-11-14%20at%2017.31.13.jpeg" alt="John" style="width:100%">
              <h1>Verónica</h1>
              <p class="title">CEO & Fundador de la Organizacón</p>
              <p>Universidad Autónoma de Aguascalientes</p>
              <div style="margin: 24px 0;">
                <a href="#"><i class="fa fa-dribbble"></i></a> 
                <a href="#"><i class="fa fa-twitter"></i></a>  
                <a href="#"><i class="fa fa-linkedin"></i></a>  
                <a href="#"><i class="fa fa-facebook"></i></a> 
              </div>
              <p><button class="boton">Contacto</button></p>
            </div>
        </div>
        </div>
        
        <hr>
    
    
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