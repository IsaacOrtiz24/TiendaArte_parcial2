<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $envio = $_POST["envio"];
    $cantidad = $_POST["cantidad"];
    $domicilio = $_POST["domicilio"];
    $fecha_pedido = $_POST["fecha_pedido"];

    $sql = "INSERT INTO usuarios (nombre, cantidad, envio, domicilio, fecha_pedido)". 
    "VALUES ('".$nombre."', ".$cantidad.", ".$envio.", '".$domicilio."', '".$fecha_pedido."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>