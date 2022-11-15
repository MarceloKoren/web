<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
 require 'scripts/funciones.php';
 
 $form_dni = $_POST['dni'];
 $form_apellido = $_POST['apellido'];
 $form_nombre = $_POST['nombre'];
 $form_sexo = $_POST['sexo'];
 $form_fecha = $_POST['fecha'];
 $form_estado = $_POST['estadocivil'];
 $form_direccion = $_POST['direccion'];
 $form_localidad = $_POST['localidad'];
 $form_provincia = $_POST['provincia'];
 $form_codigopostal = $_POST['codigopostal'];
 $form_nacionalidad = $_POST['nacionalidad'];
 $form_telefono = $_POST['telefono'];
 $form_email = $_POST['email'];
 $form_fallecido = "no";


 $form_fuerza = $_POST['fuerza'];
 $form_jerarquia = $_POST['jerarquia'];
 $form_estadofuerza = $_POST['estadofuerza'];


 conectar();
/*
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE nombre_usuario = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "Nombre de Usuario ya asignado, ingresa otro." . "<br />";

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{
*/
 
 $query1 = "INSERT INTO usuarios VALUES (NULL,'$form_dni', '$form_dni',0)";
 $conexion->query($query1);

 $query = "INSERT INTO personas VALUES ('$form_dni', '$form_apellido', '$form_nombre', '$form_sexo',
          '$form_fecha', '$form_estado','$form_direccion', '$form_localidad', '$form_provincia', 
          '$form_codigopostal', '$form_nacionalidad','$form_telefono','$form_email','$form_fallecido')";

 if ($conexion->query($query) === TRUE) {
     
     $query2 = "INSERT INTO clientes VALUES (NULL,'$form_dni', '$form_fuerza','$form_jerarquia', 
                                             '$form_estadofuerza')";
          $conexion->query($query2);
 // header('Location: http://localhost/Login/login.html');

 //echo "<h3>" . "Bienvenido: " . $_POST['username'] . "</h3>" . "\n\n";
 //echo "<h3>" . "Iniciar Sesion: " . "<a href='login.html'>Login</a>" . "</h3>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 //}
 mysqli_close($conexion);
?>


<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Estudio Kore - Creacion de Usuario</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
  <?php include 'admin/superior.html'; ?>

<div class="container-fluid">
  <div class="row">
  <?php include 'admin/menulateral.html'; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Registro exitoso</h1>
        
      </div>

      <p><a href="paneladmin.php"><button type="button" class="btn btn-lg btn-outline-primary" >Volver</button></a></p>
      
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script></body>
</html>

