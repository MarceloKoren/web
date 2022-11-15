<?php
  require 'scripts/funciones.php';
  if ( !haIniciadoSesion()){
      header( 'location : index.html');
  }
  conectar();
  
   $persona = getDatosPersonales();
  
  
  desconectar(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koren & Asociados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Eliminando el subrayado de los links -->
  <style type="text/css"> 
  a:link 
  { 
  text-decoration:none; 
  } 
  </style>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-end">
  <ul class="navbar-nav">
    <li class="nav-item active"><a class="nav-link"  href=datoscliente.php>Mis Datos</a></li>
    <li class="nav-item active"><a class="nav-link"  href=datoscausas.php>Mis Causas</a></li>
    <li class="nav-item active"><a class="nav-link"  href=contacto.php>Contacto</a></li>
    <li class="nav-item active"><a class="nav-link"  href=logout.php>Cerrar Sesion</a></li>
  </ul>
</nav>

 <div class="jumbotron text-center">
    <h1>Bienvenido <?php  echo $persona[2] ?></h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <a href=""><h3>Datos Personales</h3></a>
      <p>Apellido : <?php echo $persona[1] ?></p>
      <p>Nombre : <?php echo $persona[2] ?></p>
      <p>DNI : <?php echo $persona[0] ?></p>
    </div>
    <div class="col-sm-6">
      <a href=""><h3>Mantengase Informado</h3></a>
      <p>Aqui toda su informacion ...</p>
      <p>...</p>
    </div>
    
  </div>
  
</div>
</body>
</html>