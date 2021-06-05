<?php
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    require_once 'conecta.php';

    $sql = "INSERT INTO `clientes`(`nombre`, `direccion`, `correo`, `telefono`) VALUES ('$nombre','$direccion','$correo','$telefono')";

    if($respuesta = mysqli_query($conecta, $sql)){
        echo "0";
    }else{
        echo "1";
    }

?>