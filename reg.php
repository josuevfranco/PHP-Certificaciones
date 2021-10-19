<?php 

    $name = $_POST["nombre"];
    $mail = $_POST["correo"];
    $user = $_POST["usuario"];
    $passw = $_POST["contra"];

    $file = fopen("archivo.txt","a+");

    fwrite($file, $name." ".$mail." ".$user." ".$passw."\r\n");
    fclose($file);

    header("Location: cargando.php");
?> 