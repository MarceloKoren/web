<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
 require 'scripts/funciones.php';
 
 $email = $_POST['email'];
 $actor = $_POST['actor'];
 $reclamo = $_POST['reclamo'];
 $importe = $_POST['importe'];
 $fechacupon = $_POST['fecha'];
 $cuotas = $_POST['cuotas'];

    $delimiter = ",";
    $filename = $email . date('Y-m-d') . ".doc";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');

    $fechacuponhtml =  $fechacupon;
    
    header("Content-type: application/vnd.ms-word");
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    //header("Content-Disposition: attachment; Filename=nombreDelArchivo.doc");
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="Windows-1252" />
</head>
<body>
    
        <?php for($i = 1; $i <= $cuotas ; ++$i) { ?>
      <h1>Vencimiento ** <?php  echo date("d-m-Y",strtotime($fechacuponhtml)) ?> ** </h1>
      <h2>Concepto    : <?php  echo $reclamo ?></h2>
      <h2>Actor     :    <?php  echo $actor ?></h2>
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <h2>Estudio Koren & Asociados</h2>
        <?php  if ( ($i % 2) == 0) { ?>
       
        <?php }else{ ?>
        <br/><br/><br/><br/>
        <?php  }   ?>
      

      <?php  $fechacuponhtml = date("Y-m-d",strtotime($fechacuponhtml."+ 1 month"));   } ?>
</body>
</html>