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
    $filename = $email . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');



    $fechacupon = date("Y-m-d",strtotime($fechacupon."+ 2 years")); 

    for($i = 1; $i <= $cuotas ; ++$i) {

        $mescupon =  date("m",strtotime($fechacupon)); 
        $anio =  date("Y",strtotime($fechacupon)) - 2; 

        if ($mescupon == 1){
             $mes =  "ENE";
        }
        if ($mescupon == 2){
            $mes =  "FEB";
       }
       if ($mescupon == 3){
        $mes =  "MAR";
        }
        if ($mescupon == 4){
            $mes =  "ABR";
       }
       if ($mescupon == 5){
        $mes =  "MAY";
       }
       if ($mescupon == 6){
        $mes =  "JUN";
        }
        if ($mescupon == 7){
            $mes =  "JUL";
       }
       if ($mescupon == 8){
           $mes =  "AGO";
      }
      if ($mescupon == 9){
       $mes =  "SEPT";
       }
       if ($mescupon == 10){
           $mes =  "OCT";
      }
      if ($mescupon == 11){
       $mes =  "NOV";
      }
      if ($mescupon == 12){
       $mes =  "DIC";
       }

        $titulo = $actor." -CUPON ".$mes.".".$anio;
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


