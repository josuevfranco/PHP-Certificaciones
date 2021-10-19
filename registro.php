<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="styles.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>


<div class="sidenav">
        

        
         <div class="login-main-text">
            <a href="index.php"><img src="images/Logo2.png" alt=""></a>
            <h2>Bienvenido<br> Página de Registro</h2>
            <p>Regístrate para tener acceso.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="reg.php" method="post">
                  <div class="form-group">
                     <label>Nombre Completo</label>
                     <input type="text" name="nombre" class="form-control" placeholder="Nombre y apellidos" required>
                  </div>
                  <div class="form-group">
                     <label>Correo Electrónico</label>
                     <input type="email" name="correo" class="form-control" placeholder="correo@micorreo.com" required>
                  </div>
                  <div class="form-group">
                     <label>Usuario</label>
                     <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="contra" class="form-control" placeholder="*******" required>
                  </div>
                  <button type="submit" class="btn btn-black">Registrarse</button> 
               </form>
            </div>
         </div>
      </div>
      
     
  