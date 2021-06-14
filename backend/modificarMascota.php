<?php
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $raza = $_POST['raza'];
    $color = $_POST['color'];
    $edad = $_POST['edad'];
    require_once 'conecta.php';

    $sql = "SELECT * FROM `mascotas` WHERE `nombre`!='$nombre' AND `edad`!=$edad";

    if($respuesta = mysqli_query($conecta, $sql)){
        if(mysqli_num_rows($respuesta) < 1){
            $sql1 = "UPDATE `mascotas` 
            SET `nombre`='$nombre',`raza`='$raza',`color`='$color',`edad`='$edad' WHERE id=$id";

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