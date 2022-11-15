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

 $form_llego = $_POST['llego'];
 $form_recomendadopor = $_POST['recomendadopor'];
 
 $form_claveseguridadsocial = $_POST['claveseguridadsocial'];
 $form_clavefiscal = $_POST['clavefiscal'];
 $form_fuerza = $_POST['fuerza'];
 $form_jerarquia = $_POST['jerarquia'];
 $form_estadofuerza = $_POST['estadofuerza'];
 $form_nrobeneficio = $_POST['nrobeneficio'];
 $form_usuariocaja = $_POST['usuariocaja'];
 $form_passcaja = $_POST['passcaja'];
 $form_cbu = $_POST['cbu'];
 $form_banco = $_POST['banco'];
 
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
 

 $query = "UPDATE datospersonales VALUES ('$form_dni', '$form_apellido', '$form_nombre', '$form_sexo',
          '$form_fecha', '$form_estado','$form_direccion', '$form_localidad', '$form_provincia', 
          '$form_codigopostal', '$form_nacionalidad','$form_telefono','$form_email')";

 if ($conexion->query($query) === TRUE) {
     
     $query2 = "UPDATE datosextras VALUES ('$form_dni', '$form_claveseguridadsocial', '$form_clavefiscal', '$form_fuerza',
         '$form_jerarquia', '$form_estadofuerza','$form_nrobeneficio', '$form_usuariocaja', '$form_passcaja', 
         '$form_cbu', '$form_banco','$form_llego','$form_recomendadopor')";
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
    <title>Dashboard Template · Bootstrap</title>

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
        <h1 class="h2">Modificacion exitosa</h1>
        
      </div>


      
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script></body>
</html>

