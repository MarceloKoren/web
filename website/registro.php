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
        <h1 class="h2">Registro de Cliente</h1>
        
      </div>
        
        <form class="form-horizontal" action="registrar-usuario.php" method="post">
    <div class="form-group row">
      <label class="control-label col-sm-1" for="dni">DNI</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" maxlength="20" placeholder="DNI" name="dni" required>
      </div>
      <label class="control-label col-sm-1" for="apellido">Apellido:</label>
      <div class="col-sm-3">
        <input type="apellido" class="form-control" maxlength="50" id="apellido" placeholder="Apellido" name="apellido">
      </div>
      <label class="control-label col-sm-1" for="nombre">Nombre Completo:</label>
      <div class="col-sm-4">
        <input type="nombre" class="form-control" maxlength="50" id="nombre" placeholder="Nombre completo" name="nombre">
      </div>
    </div>
      
    <div class="form-group row">
      <label class="control-label col-sm-2" for="Direccion">Direcion:</label>
      <div class="col-sm-10">
        <input type="direccion" class="form-control" maxlength="50" id="direccion" placeholder="Domicilio" name="direccion">
      </div>
    </div>
      
    <div class="form-group row">
      <label class="control-label col-sm-1" for="localidad">Localidad:</label>
      <div class="col-sm-3">
        <input type="localidad" class="form-control" maxlength="50" id="localidad" placeholder="Localidad" name="localidad">
      </div>
    
      <label class="control-label col-sm-1" for="prov">Provincia:</label>
      <div class="col-sm-3">
        <input type="provincia" class="form-control" maxlength="50" id="provincia" placeholder="Provicia" name="provincia">
      </div>
    
      <label class="control-label col-sm-1" for="codigopostal">Codigo Postal:</label>
      <div class="col-sm-3">
        <input type="codigopostal" class="form-control" maxlength="50" id="codigopostal" placeholder="Codigo Postal" name="codigopostal">
      </div>
    </div>
      
    <div class="form-group row">
      <label class="control-label col-sm-1" for="tel">Telefonos:</label>
      <div class="col-sm-6">
        <input type="telefono" class="form-control" maxlength="50" id="telefono" placeholder="Telefono" name="telefono">
      </div>
    
      <label class="control-label col-sm-1" for="email">Email:</label>
      <div class="col-sm-4">
          <input type="email" class="form-control" maxlength="50" id="email" placeholder="correo@correo.com" name="email">
      </div>
    </div>       

  
            <div class="form-row" > 
  
      <label class="control-label col-1" for="sexo">Sexo:</label>
      <div class="col-2">
        <p>
    <select name="sexo" class="form-control" >
              <option>Masculino</option>
              <option>Femenino</option>
    </select>
       </p>
      </div>
    
      
     
      <label class="control-label col-1" for="fecha">Fecha de Nacimiento:</label>
      <div class="col-2">          
        <input type="date" class="form-control"  name="fecha">
      </div>
     
    
    
      <label class="control-label col-1" for="estadocivil">Estado Civil:</label>
      <div class="col-2">
        <select name="estadocivil" class="form-control" >
            <option value="Sin Informar">....</option>
              <option>Casado</option>
              <option>Soltero</option>
              <option>Viudo</option>
              <option>Separado</option>
              <option>Divorciado</option>
        </select>
      </div>

       <label class="control-label col-sm-1" for="estadocivil">Nacionalidad:</label>
      <div class="col-sm-2">
          <select name="nacionalidad" class="form-control" >
              <option>Argentina</option>
              <option>Uruguay</option>
              <option>Paraguay</option>
              <option>España</option>
              <option>Chile</option>
              <option>Otro</option>
        </select>
      </div>
    </div>
           
     
 

          <div class="form-row" > 
  
      <label class="control-label col-sm-1" for="fuerza">Fuerza</label>
      <div class="col-sm-3">
          <select name="fuerza" class="form-control" >
              <option value="Sin Informar">....</option>
              <option>Civil</option>
              <option>Policia Federal Argentina</option>
              <option>Policia de la Ciudad</option>
              <option>Ejercito</option>
              <option>Armada Naval</option>
              <option>Policia AeroPortuaria</option>
              <option>Prefectura</option>
              <option>Gendarmeria</option>
        </select>
      </div>
        
     

      <label class="control-label col-sm-1" for="estado">Estado de la Fuerza</label>
      <div class="col-sm-3">
          <select name="estadofuerza" class="form-control" >
              <option value="Sin Informar">....</option>
              <option>Retirado</option>
              <option>Pension</option>
              <option>Actividad</option>
              <option>EniPor</option>
        </select>
      </div>
      


      <label class="control-label col-sm-1" for="jerarquia">Jerarquia</label>
      <div class="col-sm-3">
        <input type="jerarquia" class="form-control" maxlength="50" id="Jerarquia" placeholder="Jerarquia" name="jerarquia">
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
