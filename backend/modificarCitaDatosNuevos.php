<?php
    $id = $_POST['id'];
    $cliente = $_POST['cliente'];
    $mascota = $_POST['mascota'];
    $fecha = $_POST['fecha'];

    require_once 'conecta.php';

    $sql = "UPDATE `citas` SET `cliente`='$cliente',`mascota`='$mascota',`fecha`='$fecha' 
            WHERE `id`=$id";

    if($respuesta = mysqli_query($conecta, $sql)){
        echo "0";
    }else{
        echo "1";
    }
    ?>