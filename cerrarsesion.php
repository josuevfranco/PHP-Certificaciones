<?php

error_reporting(0); 
session_start();

unset($_SESSION['usuario']); 
$_SESSION['usuario']="";
session_destroy();

# Finalmente lo redireccionamos al formulario
header("Location: loginout.php");

?>