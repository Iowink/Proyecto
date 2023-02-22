<?php
    $conexion = mysqli_connect("localhost","root","login_egistro_db");
    if($conexion){
        echo 'conectado exitosamente';
    }else{
        echo 'no se ha podido conectar';
    }


?>