<?php
    $conexion = mysqli_connect("localhost","root","login_registro_db");
    if($conexion){
        echo 'conectado exitosamente';
    }else{
        echo 'no se ha podido conectar';
    }


?>