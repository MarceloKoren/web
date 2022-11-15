<?php
  require 'scripts/funciones.php';
  if ( !haIniciadoSesion() || !esAdmin()){
      header( 'location : index.html');
  }

  $usuario = $_GET['usuario'];
  
    
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
        <h1 class="h2">Registro de Causas</h1>
        
      </div>
        
        <form class="form-horizontal" action="registrar-causa.php" method="post">

        <input id="prodId" name="usuario" type="hidden" value="<?php echo $usuario ?>">
    
            <div class="form-row" > 
    
      
     <div class="form-group row col-6">
      <label class="control-label col-2" for="fecha">Fecha de Convenio:</label>
      <div class="col-10">          
        <input type="date" class="form-control"  name="fecha">
      </div>
    </div> 
    
    <div class="form-group row col-6">
      <label class="control-label col-2" for="reclamo">Reclamo</label>
      <div class="col-10">
        <select name="reclamo" class="form-control" >
              <option>Decreto 380/17  463/17</option>
              <option>Resolucion 374 491</option>
              <option>Decreto 2140/13</option>
              <option>Decreto 2140/13 - Codigo 297</option>
              <option>Decreto 1305</option>
              <option>Antiguedad en Servicio y Tiempo Minimo</option>
        </select>
      </div>
    </div>
            </div>
    
           
   <div class="form-row" > 
            
            <div class="form-group row col-6">
            <label class="control-label col-2" for="revoca">Revoca</label>
            <div class="col-10">
              <select name="revoca" class="form-control" >
                    <option>No</option>
                    <option>Si</option>
                  
              </select>
            </div>
          </div>       
          <div class="form-group row col-6">
            <label class="control-label col-sm-2" for="abogado">Abogado</label>
            <div class="col-sm-10">
              <input type="abogado" class="form-control" maxlength="50" id="abogado" placeholder="Abogado" name="abogado">
            </div>
          </div>
                    </div>   
                    
                    
      <div class="form-row" > 
            
      <div class="form-group row col-4">
      <label class="control-label col-sm-2" for="nroexpediente">Nro de Expediente:</label>
      <div class="col-sm-10">
        <input type="nroexpediente" class="form-control" maxlength="50" id="nroexpediente" placeholder="Nro de Expediente" name="nroexpediente">
      </div>
    </div>   
    <div class="form-group row col-4">
      <label class="control-label col-sm-2" for="anioexpediente">Año de Expediente:</label>
      <div class="col-sm-10">
        <input type="anioexpediente" class="form-control" maxlength="50" id="anioexpediente" placeholder="Año" name="anioexpediente">
      </div>
    </div>
     <div class="form-group row col-4">
      <label class="control-label col-2" for="fuer">Fuero</label>
      <div class="col-10">
        <select name="fuero" class="form-control" >
            <option value="Sin Informar">....</option>
              <option>Camara de Seguridad Social</option>
              <option>Contencioso Administrativ</option>
              <option>Laboral</option>
             
        </select>
      </div>
    </div>           
          
              </div>

   <div class="form-row" > 
            
      <div class="form-group row col-6">
      <label class="control-label col-2" for="carpeta">Carpeta</label>
      <div class="col-10">
        <select name="carpeta" class="form-control" >
              <option>PFA</option>
              <option>CA</option>
              <option>CIV</option>
              <option>PNA</option>
              <option>GNA</option>
        </select>
      </div>
    </div>       
    <div class="form-group row col-6">
      <label class="control-label col-sm-2" for="nrodecarpeta">Nro de Carpeta</label>
      <div class="col-sm-10">
        <input type="nrocarpeta" class="form-control" maxlength="50" id="nrocarpeta" placeholder="Nunmero" name="nrocarpeta">
      </div>
    </div>
              </div>   
    
      
    
    
    <div class="form-group row">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-lg btn-outline-primary">Crear</button>
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
