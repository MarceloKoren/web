<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
 require 'scripts/funciones.php';
 
 $email = $_POST['email'];
 $reclamo = $_POST['reclamo'];
 $importe = $_POST['importe'];
 $fechacupon = $_POST['fecha'];
 $cuotas = $_POST['cuotas'];

    $delimiter = ",";
    $filename = $email . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');

    for($i = 1; $i <= $cuotas ; ++$i) {

        $mescupon =  date("m",strtotime($fechacupon)); 
        $anio =  date("Y",strtotime($fechacupon)); 

        if ($mescupon == 1){
             $mes =  "ENERO";
        }
        if ($mescupon == 2){
            $mes =  "FEBRERO";
       }
       if ($mescupon == 3){
        $mes =  "MARZO";
        }
        if ($mescupon == 4){
            $mes =  "ABRIL";
       }
       if ($mescupon == 5){
        $mes =  "MAYO";
       }
       if ($mescupon == 6){
        $mes =  "JUNIO";
        }
        if ($mescupon == 7){
            $mes =  "JULIO";
       }
       if ($mescupon == 8){
           $mes =  "AGOSTO";
      }
      if ($mescupon == 9){
       $mes =  "SEPTIEMBRE";
       }
       if ($mescupon == 10){
           $mes =  "OCTUBRE";
      }
      if ($mescupon == 11){
       $mes =  "NOVIEMBRE";
      }
      if ($mescupon == 12){
       $mes =  "DICIEMBRE";
       }

        $titulo = "CUPON ".$mes." DEL ".$anio;
        $fields = array($email, $titulo, $reclamo, $importe,$fechacupon,null,null);
        $fechacupon = date("Y-m-d",strtotime($fechacupon."+ 1 month")); 
        fputcsv($f, $fields, $delimiter);

    }

    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
?>