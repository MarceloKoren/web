<?php
// Conectar a la base de datos
$con = new mysqli("localhost","root","","bdkoren");
// Crear una variable para almacenar los datos
$data_array = array();
// SQL para obtener los datos
$sql = "select * from clients";
// Ejeuctar el SQL
$query = $con->query($sql);
// Recorrer los resultados
while($data = $query->fetch_object()){
	// Poner los datos en un array en el orden de los campos de la tabla
	$data_array[] = array($data->email, $data->nombre, $data->dni);
}
// crear un array con el array de los datos, importante que esten dentro de : data
$new_array  = array("data"=>$data_array);

// crear el JSON apartir de los arrays

echo json_encode($new_array);

?>
