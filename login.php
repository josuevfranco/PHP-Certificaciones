<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="styles.css">
<link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <a href="index.php"><img src="images/Logo2.png" alt=""></a>
            <h2>Bienvenido<br> Página de Sesión</h2>
            <p>Inicia sesión o regístrate para tener acceso.</p>
            <form action="registro.php">
                <button type="submit" class="btn btn-secondary">Regístrate Aquí </button>
            </form>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
              
               <form action="log.php" method="post">
                  <div class="form-group">
                     <label>Usuario</label>
                     <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario" required>
                  </div>
                  <div class="form-group">
                     <label > Password</label>
                     <input type="password" name="contra" class="form-control" placeholder="*******" required>
                  </div>
                  <button type="submit" class="btn btn-black">Iniciar Sesión</button>
               </form>
               
            </div>
         </div>
      </div>
      
     
    
   
  
 