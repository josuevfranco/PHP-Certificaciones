    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <head>
        <meta http-equiv="refresh" content="2;url=java.php" />
    </head>
    
   <style>

    .loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      width: 120px;
      height: 120px;
      -webkit-animation: spin 2s linear infinite; /* Safari */
      animation: spin 2s linear infinite;
      text-align: center;    
    }
       
    h2{
           margin: 20px;
           text-align: center;
    }

    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .externo {
      align-items: center;
      display: flex;
      justify-content: center;
    }
       
    .interno {
      
    }
</style>


<?php 

    error_reporting(0); 
    $band=0; //para saber si la cuenta y contrasena estan en el archivo
    $nombre = "";

    session_start();
    $usuario = $_SESSION["usuario"]; 

    $file=fopen("archivo.txt", "r");
    while(!feof($file)){
        $linea=fgets($file);
        if ($linea != ""){
          $aux=preg_split("/[\s,]+/",$linea);   

          $user = $aux[2];
          $nombre = $aux[0];

          if ($user===$usuario){ 
                echo '<h2>Bienvenido(a): '.$nombre.'</h2>';
                $band=1; break;
         }

        }
    }   
    fclose($file);


  // Formato 24 horas (de 1 a 24) 
  $hora = date('G'); if (($hora >= 0) AND ($hora < 6)) 
  { 
    $mensaje = "Buena madrugada"; 
  } 
  else if (($hora >= 6) AND ($hora < 12)) 
  { 
    $mensaje = "Buenos días"; 
  } 
  else if (($hora >= 12) AND ($hora < 18)) 
  { 
    $mensaje = "Buenas tardes"; 
  } 
  else
  { 
  $mensaje = "Buenas noches"; 
  } 
  echo '<h2>'.$mensaje.'</h2>';
  echo '<h2>Inicio de Sesión Exitoso</h2>';

?>



<h2>Lo estamos redirigiendo a la página de nuestro curso de JAVA</h2>

<div class="externo">    
<div class="loader" class="interno"></div>
</div>