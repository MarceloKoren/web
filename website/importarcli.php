f<?php
require 'scripts/funciones.php';

conectar();


if(isset($_POST['import_data'])){

$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
if(is_uploaded_file($_FILES['file']['tmp_name'])){
$csv_file = fopen($_FILES['file']['tmp_name'], 'r');


// Obtengo los registros del csv
while(($data = fgetcsv($csv_file)) !== FALSE){
// Chequeo que el cupon no este cargado



$mysql_insert = "INSERT INTO usuarioscaja (usuario, usuariocaja, passcaja, estado) VALUES('".$data[0]."', '".$data[3]."', '".$data[4]."', '".$data[5]."')";
mysqli_query($conexion, $mysql_insert) or die("database error:". mysqli_error($conexion));

$mysql_insert = "INSERT INTO usuarios (usuario, clave, administrador) VALUES('".$data[0]."', '".$data[0]."', 0)";
mysqli_query($conexion, $mysql_insert) or die("database error:". mysqli_error($conexion));

$mysql_insert = "INSERT INTO personas (usuario, apellido,nombre) VALUES('".$data[0]."', '".$data[1]."', '".$data[2]."')";
mysqli_query($conexion, $mysql_insert) or die("database error:". mysqli_error($conexion));

$mysql_insert = "INSERT INTO clientes (usuario) VALUES('".$data[0]."')";

mysqli_query($conexion, $mysql_insert) or die("database error:". mysqli_error($conexion));

}
fclose($csv_file);
$import_status = '?import_status=success';
} else {
$import_status = '?import_status=error';
}
} else {
$import_status = '?import_status=invalid_file';
}
}


desconectar();

?>