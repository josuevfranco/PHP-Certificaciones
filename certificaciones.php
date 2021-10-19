<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="java.js"></script>
    <meta charset="UTF-8">
    <title>Certificaciones</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VJDEV</title>
    <link rel="stylesheet" href="css/miestilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .aside1, .aside2{
            flex-grow: 1;
            background-color: white;
            margin: 4px;
            padding: 15px;
            align-items: center;
            text-align: center;
            box-shadow: 1px 1px grey;
            border: 1px solid #959595;
            width: 0;
        }
        
        .aside3, .aside4{
            flex-grow: 1;
            background-color: whitesmoke;
            margin: 4px;
            padding: 15px;
            align-items: center;
            text-align: center;
            width: 0;
        }

        .section{
            flex-grow: 1;
            background-color: white;
            margin: 4px;
            padding: 15px;
            align-items: center;
            text-align: center;
            box-shadow: 1px 1px grey;
            border: 1px solid #959595;
            width: 0;
        }
        
        #contenedor{
            display: flex;            
            flex-wrap: wrap;
        }
        
        #img2{
            font-size: 200%;
        }
        
        
        #textoComun{
            font-size: 100%;
            text-align: justify;
        }

        #finales{
            font size: 120%;
            color: rgb(0,123,192);
            text-decoration: none;
        }

        #finales a{
            font-size: 150%;
            text-decoration-line: none;
            color:  rgb(0,123,192);
            text-justify: auto;
        }
        
        body{
            background-color: whitesmoke;
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
         
     <hr>         
     <div id="contenedor">
       <aside class="aside1">
           <div>
               <p id="img2"> <img src="imgJava/lenguajes/descarga.png" align="left" width="180px" height="180">Certifícate en <span style="color:rgba(0,123,192)">JAVA</span> </p>
               <p id="azul">¡Los conocimientos de Java son de los más valorados!</p>
               <p id="textoComun">Todo <strong>lo que necesitas saber de Java</strong> en un solo sitio</p>
               <p id="finales"><a href="java.php">Conoce más</a> <i class="far fa-arrow-alt-circle-right"></i></p>
           </div>
       </aside>
       
       <section class="section">
           <div>
               <p id="img2"> <img src="imgJava/lenguajes/php.png" align="left" width="180px" height="180">Conoce todo sobre<span style="color:rgba(0,123,192)"> PHP</span></p>
               <p id="azul">¡El lenguaje más popular de programación web!</p>
               <p id="textoComun">La programación de scripts del lado del servidor</p>
               <p id="finales"><a href="php.php">Conoce más</a> <i class="far fa-arrow-alt-circle-right"></i></p>
           </div>
       </section>
       
       <aside class="aside2">
           <div>
               <p id="img2"> <img src="imgJava/lenguajes/c++.png" align="left" width="180px" height="180">Descubre el lenguaje<span style="color:rgba(0,123,192)"> C++</span></p>
               <p id="azul">¡Programa en lenguaje de alto nivel!</p>
               <p id="textoComun">Es muy potente para crear sistemas, un lenguaje muy robusto</p>
               <p id="finales"><a href="c.php">Conoce más</a> <i class="far fa-arrow-alt-circle-right"></i></p>
           </div>
       </aside>   
     </div>  
     
        <!-- MAIN (Center website) -->
        <div class="main">

        <h1>CONOCE NUESTROS CURSOS</h1>
        <hr>

        <h2>LENGUAJES DESTACADOS</h2>

        <div id="myBtnContainer">
          <button class="btn active" onclick="filterSelection('nature')"> Java</button>
          <button class="btn" onclick="filterSelection('cars')"> PHP</button>
          <button class="btn" onclick="filterSelection('people')"> C++</button>
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row">
          <div class="column nature">
            <div class="content">
              <img src="galeria/1.png" alt="Mountains" style="width:100%">
              <h4>Tiene muchas salidas laborales</h4>
              <p>Empresas necesitan programadores Java, que pueden ir desde programadores java para aplicaciones móviles, hasta programadores para dispositivos concretos del internet de las cosas...</p>
            </div>
          </div>
          <div class="column nature">
            <div class="content">
            <img src="galeria/2.png" alt="Lights" style="width:100%">
              <h4>Java está en todas partes</h4>
              <p>Java nos permite crear programas para móviles, servidores, cajeros automáticos, tarjetas inteligentes, televisores, dispositivos del internet de las cosas, aparatos médicos…...</p>
            </div>
          </div>
          <div class="column nature">
            <div class="content">
            <img src="galeria/3.png" alt="Nature" style="width:100%">
              <h4>El internet de las cosas</h4>
              <p>Cada vez más tenemos dispositivos inteligentes en nuestras casa. Todas estas cosas necesitan de microcontroladores programados en Java....</p>
            </div>
          </div>

          <div class="column cars">
            <div class="content">
              <img src="galeria/5.png" alt="Car" style="width:100%">
              <h4>PHP es un lenguaje sencillo de aprender</h4>
              <p>En 3 semanas podemos conocer gran parte de su sintaxis y entender su mecanismo, permitiendo que el límite de lo que queramos crear pase por nuestra creatividad e imaginación y no por cuestiones técnicas..</p>
            </div>
          </div>
          <div class="column cars">
            <div class="content">
            <img src="galeria/6.png" alt="Car" style="width:100%">
              <h4>PHP nos permite realizar aplicaciones integrales</h4>
              <p>Da soluciones cómodas y robustas a la hora de desarrollar sitios web, el aprender a programar PHP nos deja explorar en libertad sin la necesidad de encasillarse en un protocolo..</p>
            </div>
          </div>
          <div class="column cars">
            <div class="content">
            <img src="galeria/4.png" alt="Car" style="width:100%">
              <h4>PHP es un lenguaje escalable y estable en el tiempo.</h4>
              <p> A la hora de buscar trabajo como programador, los conocimientos en PHP son los más buscados para comenzar a desarrollar en diferentes proyectos. Se estima que más de un 80% de la web está hecha en PHP...</p>
            </div>
          </div>

          <div class="column people">
            <div class="content">
              <img src="galeria/7.png" alt="Car" style="width:100%">
              <h4>Tiene un alto rendimiento.</h4>
              <p>Es un lenguaje que se está actualizando, y, por lo tanto, a pesar de tener más de 20 años es moderno. Es multiplataforma...</p>
            </div>
          </div>
          <div class="column people">
            <div class="content">
            <img src="galeria/8.png" alt="Car" style="width:100%">
              <h4>Lenguaje de alto rendimiento</h4>
              <p>Permite hacer llamadas directamente al Sistema Operativo. Tiene una integración directa con el lenguaje ensamblador, tan directa que incluso permite escribir directamente en ensamblador con las diferentes directivas..</p>
            </div>
          </div>
          <div class="column people">
            <div class="content">
            <img src="galeria/9.png" alt="Car" style="width:100%">
              <h4>Lenguaje moderno y actualizado</h4>
              <p>Realizar programación genérica y templates, que es hacer una clase del mismo código que sirva para cualquier tipo que pase. Definir operaciones sobre los datos complejos....</p>
            </div>
          </div>
        <!-- END GRID -->
        </div>

        <!-- END MAIN -->
        </div>
        

        <h2 style="text-align:center">DESARROLLADO Y APROBADO POR</h2>
        
        <div id="contenedor">
         <div class="aside3">
            <div class="card" class="aside1">
              <img src="galeria/actuallyme.jpg" alt="John" style="width:100%">
              <h1>Josué</h1>
              <p class="title">Backend Developer</p>
              <p>Universidad Autónoma de Aguascalientes</p>
              <div style="margin: 24px 0;">
                <a href="https://twitter.com/josuevfranco"><i class="fa fa-twitter"></i></a>  
                <a href="https://www.facebook.com/josue.vazquezfranco/"><i class="fa fa-facebook"></i></a> 
              </div>
              <p><button class="boton">Contacto</button></p>
            </div>
        </div>
        
        <div class="aside4">
            <div class="card">
              <img src="galeria/WhatsApp%20Image%202020-11-14%20at%2017.31.13.jpeg" alt="John" style="width:100%">
              <h1>Verónica</h1>
              <p class="title">Front-end web development</p>
              <p>Universidad Autónoma de Aguascalientes</p>
              <div style="margin: 24px 0;">
                <a href="https://twitter.com/VeronicaRomo13"><i class="fa fa-twitter"></i></a> 
                <a href="https://www.facebook.com/veronica.romofranco"><i class="fa fa-facebook"></i></a> 
              </div>
              <p><button class="boton">Contacto</button></p>
            </div>
        </div>
        </div>
        
        
            <footer>
       <nav class="navpar" style="background-color:dimgray;">
        <div id="divf texto"><img src="images/Logo2.png" alt="" width="400px"></div>
        <div id="divf" style="font-size:20px;"><a href="#">Aviso de Privacidad</a></div>
        <div id="divf" style="font-size:20px;"><a href="#">Acerca de</a></div>
        <div id="divf" style="font-size:20px;"><a href="#">Términos y condiciones</a></div>
       </nav>
        
    </footer>
</body>
</html>