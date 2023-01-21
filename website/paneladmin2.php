<?php
  header("Content-Type: text/html;charset=utf-8");
  require 'scripts/funciones.php';
  if ( !haIniciadoSesion() || !esAdmin()){
      header( 'location : index.html');
  }
  
?>

<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel de Control - Principal</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <h1 class="h2">Clientes</h1>
      </div>
     <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
        <th>Nombre</th>
        <th>Correo Electronico</th>
        <th>DNI</th>
        </tr>
        </thead>
     </table>

     
    </main>
  </div>
</div>
	<!-- SCRIPT PARA ACTIVAR EL PLUGIN DATATABLES -->
  <script type="text/javascript" >
	
	$(document).ready(function(){
		$("#example").DataTable({
			ajax: "loaddata.php"
		});
	});
</script>
	<!-- INCLUIR LAS LIBRERIAS QUE FALTAN -->

<script type="text/javascript" src="datatables/datatables.min.js"></script>

</body>
</html>
