<?php
   $conexion = NULL;  
 
   function conectar(){
    
    global $conexion;
    $conexion = mysqli_connect('localhost', 'root', '', 'bdkoren');
   }
   
   function getCategorias(){
       
    global $conexion; 
    $respuesta = mysqli_query($conexion, "SELECT C.ID_categoria, C.descripcion, C.ruta FROM `permisos` P INNER JOIN categorias C ON P.ID_categoria = C.ID_categoria WHERE `usuario`='".$_SESSION['usuario']."' ");
    return $respuesta->fetch_all();
    
   }
     
   function getDatosPersonales(){
       
       global $conexion;
       $consulta = "SELECT * FROM personas WHERE usuario = '".$_SESSION['usuario']."'";
       $respuesta = mysqli_query($conexion, $consulta);
       return mysqli_fetch_row($respuesta);
   }

   
   
   function getDatosPersonales2($usuario){
       
       global $conexion;
       $consulta = "SELECT * FROM personas WHERE usuario = '$usuario'";
       $respuesta = mysqli_query($conexion, $consulta);
       return mysqli_fetch_row($respuesta);
   }
   
   function getDatosPersonales3($usuario){
       
       global $conexion;
       $consulta = "SELECT * FROM personas ";
       $respuesta = mysqli_query($conexion, $consulta);
       return mysqli_fetch_row($respuesta);
   }

  function getFuerza($usuario){
       
       global $conexion;
       $consulta = "SELECT * FROM clientes WHERE usuario = '$usuario'";
       $respuesta = mysqli_query($conexion, $consulta);
       return mysqli_fetch_row($respuesta);
   }
   

   
   function getUsuarios(){
       
       global $conexion;
       $consulta = "SELECT * FROM personas"; 
       $respuesta = mysqli_query($conexion, $consulta);
       return $respuesta->fetch_all();
   }
   
   function getProcesos2($usuario){
       
       global $conexion;
       $consulta = "SELECT * FROM procesos WHERE usuario = '$usuario'"; 
       $respuesta = mysqli_query($conexion, $consulta);
       return $respuesta->fetch_all();
   }

   function getProcesos(){
       
       global $conexion;
       $consulta = "SELECT * FROM procesos"; 
       $respuesta = mysqli_query($conexion, $consulta);
       return $respuesta->fetch_all();
   }


   
   function validarUsuario($usuario,$clave){
       
       global $conexion;
       $consulta = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND clave = '".$clave."'";
       $respuesta = mysqli_query($conexion, $consulta);
       
       If ( $fila = mysqli_fetch_row($respuesta)){
           
           session_start();
           $_SESSION['usuario'] = $usuario;
           $_SESSION['admin'] = $fila[3];
           return TRUE;
       }
       return FALSE;
   }   
       
   function haIniciadoSesion(){
       
       session_start();
       return isset(  $_SESSION['usuario'] );
       
     }  
     
    function esAdmin(){
        return $_SESSION['admin'];
    }   

       
   
   function desconectar(){
       
       global $conexion; 
       mysqli_close($conexion);
   }
?>
