<?php
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    require_once 'conecta.php';

    $sql = "SELECT * FROM `clientes` WHERE `nombre`='$nombre' AND `telefono`=$telefono AND `id`!=$id";

    if($respuesta = mysqli_query($conecta, $sql)){
        if(mysqli_num_rows($respuesta) < 1){
            $sql1 = "UPDATE `clientes` 
            SET `nombre`='$nombre',`direccion`='$direccion',`correo`='$correo',`telefono`='$telefono' WHERE id=$id";

            if($respuesta1 = mysqli_query($conecta, $sql1)){
                echo "0";
            }else{
                echo "1";
            }
        }else{
            echo "2";
        }
    }else{
        echo "3";
    }

?>