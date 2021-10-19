<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
    <title>Acerca de</title>
    <link rel="stylesheet" href="css/estiloacerca.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
            

        .card {
          /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);*/
          max-width: 300px;
          margin: auto;
          text-align: center;
          font-family: arial;
          background-color: white;
        }

        .title {
          color: grey;
          font-size: 18px;
        }

        .boton {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
        }

        a {
          text-decoration: none;
          font-size: 22px;
          color: black;
        }

        .boton:hover, a:hover {
          opacity: 0.7;
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
    
    
    <nav style="background-color:lavender;margin-left: 100px;margin-right: 100px;border-radius:50px;">
     <h1 class="titulo" style="text-align:center; font-size:35px;">Sobre Nosotros</h1>
      <nav class="somos">
       <div class="divsom">
           <img src="images/somos.jpg" alt="">
       </div>
       <div class="divsom">
            <p>Somos una empresa de tecnología que te permite obtener certificación en algunos de los lenguajes populares en la actualidad.</p>
            <p>Te aseguramos éxito en tus certificaciones, al mismo tiempo que obtienes oportunidades laborales y desarrollo profesional para un futuro exitoso.</p>
        </div>
        </nav>
    </nav>
   
   <br><br>

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
    
    
    <nav style="background-color:lavender; width:80%; margin-left:auto; margin-right:auto;border-radius:50px;">
        <h1 class="titulo">Nuestra ubicación</h1>
        <div class="mapa" style="background-color:lavender;width:80%;border-radius:50px;">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.393294706216!2d-75.16666507894944!3d39.95495868516173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c62df438a5d5%3A0xe3ac244d7ecf863b!2sCentro%20de%20Filadelfia%2C%20Filadelfia%2C%20Pensilvania%2019102%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1605469487677!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div>
            <p></p>
        </div>
    </nav>


    <br><br><br><br><br><br><br><br><br><br><br><br><br>
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