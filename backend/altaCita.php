<?php
    $cliente = $_POST['cliente'];
    $mascota = $_POST['mascota'];
    $fecha = $_POST['fecha'];
    require_once 'conecta.php';

    $sql = "SELECT * FROM `citas` WHERE `cliente`!='$cliente' AND `fecha`!='$fecha'";

    if($respuesta = mysqli_query($conecta, $sql)){
        if(mysqli_num_rows($respuesta) < 1){
            $sql1 = "INSERT INTO `citas`( `cliente`, `mascota`, `fecha`) VALUES ('$cliente','$mascota','$fecha')";

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