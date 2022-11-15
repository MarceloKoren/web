<?php
   require 'funciones.php';
   $usuario = $_POST['txtUsuario'];
   $clave = $_POST['txtClave'];
   conectar();
    if ( validarUsuario($usuario, $clave) ){
        if ( esAdmin( ))
            header('Location: ../paneladmin.php');
        else header('Location: ../panel-control.php');
    }
    else{
       
    };
?>
<script>
    alert('Los datos no son correctos,Verifique')
    location.href = "../index.html"
</script>