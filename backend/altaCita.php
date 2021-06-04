<?php
    $cliente = $_POST['cliente'];
    $mascota = $_POST['mascota'];
    $fecha = $_POST['fecha'];
    require_once 'conecta.php';

    $sql = "INSERT INTO `citas`( `cliente`, `mascota`, `fecha`) VALUES ('$cliente','$mascota','$fecha')";

    if($respuesta = mysqli_query($conecta, $sql)){
        echo "0";
    }else{
        echo "1";
    }

?>