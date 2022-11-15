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
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Panel de Control - Principal</title>

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
        <h1 class="h2">Clientes</h1>
        
      </div>

<nav class="navbar navbar-light bg-light">
        <a href="registro.php"><button type="button" class="btn btn-lg btn-outline-primary" >Nuevo Cliente</button></a>

  <form action="buscarusuario.php" method="get" class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="busqueda" placeholder="Buscar" id="busqueda" aria-label="Buscar">
    <button class="btn btn-lg btn-outline-primary" type="submit">Buscar</button>
  </form>
</nav>

<?php
             conectar();
             $consulta = "SELECT COUNT(*) as totalregistros FROM `personas` "; 
             $totalregiste = mysqli_query($conexion, $consulta);
             $totalregister = mysqli_fetch_array($totalregiste);
             $totalregistros= $totalregister['totalregistros'];

   

             $porpagina=25;
             
             if(empty($_GET['pagina']))
             {   
              $pagina= 1;
              }else {
              $pagina = $_GET['pagina'];
              }

              $desde = ($pagina - 1) * $porpagina;
              $totalpaginas = ceil($totalregistros / $porpagina);

              $startloop = $pagina;

              $endloop = $startloop + 4;

              if($endloop>$totalpaginas){
                $endloop=$totalpaginas;
              }
               
              
              $consulta = "SELECT * FROM personas ORDER BY apellido ASC LIMIT $desde,$porpagina"; 
              $query = mysqli_query($conexion, $consulta);
              $usuarios = mysqli_fetch_all($query);
       ?>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Documento</th>
              <th>Apellido</th>
              <th>Nombre</th>
              <th>Informacion</th>
              <th>Procesos</th>
            </tr>
          </thead>
          <tbody>
            <?php    foreach ($usuarios as $usuario):   ?>
                <tr>
                  <td><?php echo $usuario[0]   ?></td>
                  
                   <td><?php echo utf8_encode($usuario[1]) ?></td>
                 
                   <td><?php echo utf8_encode($usuario[2]) ?></td>
                   
                   <td><a href="datos.php?usuario=<?php echo $usuario[0] ?>">
                               Ver - Editar</a></td>
                   
                   <td><a href="judiciales.php?usuario=<?php echo $usuario[0] ?>">
                               Judiciales</a></td>           
                </tr>
            <?php endforeach;   ?>        
          </tbody>
        </table>
          <nav>
          <ul class="pagination justify-content-center">

          <?php
            if($pagina > 1){
              echo "<a class='page-link' href='?pagina=1'>Primera</a>";
              echo "<a class='page-link' href='?pagina=".($pagina - 1)."'><<</a>";
            }
            for($i=$startloop;$i <= $endloop;$i++){

              

                if ($i==$pagina){
                    echo '<li class="page-item active"><a class="page-link">'.$i.' </a></li>';
                  }else{
                echo '<li class="page-item"><a href="?pagina='.$i.'" class="page-link">'.$i.' </a></li>';
                  }
                
              }
              if($pagina < $totalpaginas){
                echo "<a class='page-link' href='?pagina=".($pagina + 1)."'>>></a>";
                echo "<a class='page-link' href='?pagina=".$totalpaginas."'>Última</a>";
              }
            
            ?>
            
     
           
          </ul> 
          </nav>

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
