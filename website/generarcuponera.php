<?php
  require 'scripts/funciones.php';
  if ( !haIniciadoSesion() || !esAdmin()){
      header( 'location : index.html');
  }
    
?>


<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Administracion Koren & Asociados</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet">

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
        <h1 class="h2">Generar Cuponera</h1>
        
      </div>
        
        <form class="form-horizontal" action="crearcuponera.php" method="post">

        <div class="form-group row">
     
    
      <label class="control-label col-1" for="email">Email:</label>
      <div class="col-10">
          <input type="email" class="form-control" maxlength="50" id="email" placeholder="correo@correo.com" name="email" required>
      </div>
    </div>   
    
    <div class="form-group row">
      <label class="control-label col-sm-1" for="localidad">Actor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  id="actor" placeholder="Actor" name="actor" required>
      </div>       
    </div>
      
    <div class="form-group row">
      <label class="control-label col-sm-1" for="localidad">Reclamo</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  id="reclamo" placeholder="Reclamo" name="reclamo" required>
      </div>       
    </div>

    <div class="form-group row">
      <label class="control-label col-sm-1" for="localidad">Importe ($)</label>
      <div class="col-sm-3">
        <input type="number" class="form-control"  id="importe" placeholder="Importe" name="importe" required>
       </div>
    </div>
    
    <div class="form-row" >  
      <label class="control-label col-1" for="fecha">Fecha de Vencimiento:</label>
      <div class="col-2">          
        <input type="date" class="form-control"  name="fecha" required>
       </div>   
    </div>
           
    <div class="form-row" > 
      <label class="control-label col-sm-1" for="fuerza">Cantidad de cupones</label>
      <div class="col-sm-3">
      <input type="number" class="form-control"  id="cuotas" placeholder="Cantidad de Cuotas" name="cuotas" required>
      </div>
    </div>
    
    <br/>
    
    <div class="form-group row">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-lg btn-outline-primary">Crear cuponera</button>
      </div>
    </div>
            
   
  </form>
      
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script></body>
</html>
