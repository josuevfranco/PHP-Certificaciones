<head>
    <link rel="stylesheet" href="estilos3.css">
</head>
<?php
 
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["contra"];
$nombre = "";
 
$file=fopen("archivo.txt", "r");
$band=0; //para saber si la cuenta y contrasena estan en el archivo

while(!feof($file)){
    $linea=fgets($file);
    if ($linea != ""){
      $aux=preg_split("/[\s,]+/",$linea);   
        
      $user = $aux[2];
      $contrasena = $aux[3];
      $nombre = $aux[0];
      
      if ($user===$usuario && $contrasena === $palabra_secreta){            
            $band=1; break;
     }
        
    }
}   
fclose($file);

# Luego de haber obtenido los valores, ya podemos comprobar:
if ($band==1){
     
    session_start();
     
    $_SESSION["usuario"] = $usuario;

    # Luego redireccionamos a la pagina "Secreta"
    header("Location: bienvenida.php");
    
    }else{
    # No coinciden, asi  que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
        header("Location: error.php");
    }
 
?>