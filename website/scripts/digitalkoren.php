<?php

$servername = "localhost";
$username = "root";
$password = "sarmiento";
$basededatos = "bdkoren";

$fileHandle = file_get_contents('php://input');

$registro = explode("\n", $fileHandle);

$cantidad = count($registro);

$data = explode(",",$registro[0]);

$con = mysqli_connect($servername, $username, $password) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $con, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

for ($i = 1; $i <= $cantidad; $i++) {

if(isset($data)){

    $dia = substr($data[1],0,2);
    $mes = substr($data[1],2,2);
    $anio = substr($data[1],4,8);

    $data1="$dia/$mes/$anio";


    $consulta = "INSERT INTO `movimientos` (`fecha`, `monto`, `codigodebarras`, `referencia`, `cuenta`, `mediodepago`) 
    VALUES ('$data1', '$data[3]', '$data[4]', '$data[5]', 'korenasociados', '$data[6]')";

    mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

}

$data = explode(",",$registro[$i]);

    }

mysqli_close($con);
