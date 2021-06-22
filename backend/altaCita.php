<?php
    $cliente = $_POST['cliente'];
    $mascota = $_POST['mascota'];
    $fecha = $_POST['fecha'];
    require_once 'conecta.php';

    $sql = "SELECT * FROM `clientes` WHERE nombre='$cliente'";

    if($respuesta = mysqli_query($conecta, $sql)){
        if(mysqli_num_rows($respuesta) > 0){
            $sql = "SELECT * FROM `mascotas` WHERE nombre='$mascota'";
            if($respuesta = mysqli_query($conecta, $sql)){
                if(mysqli_num_rows($respuesta) > 0){
                    $sql = "SELECT * FROM `citas` WHERE `cliente`='$cliente' AND `fecha`='$fecha' AND `mascota`='$mascota'";
                    if($respuesta = mysqli_query($conecta, $sql)){
                        if(mysqli_num_rows($respuesta) < 1){
                            $sql1 = "INSERT INTO `citas`( `cliente`, `mascota`, `fecha`) VALUES ('$cliente','$mascota','$fecha')";
        
                            if($respuesta1 = mysqli_query($conecta, $sql1)){
                                echo "0"; //insertado
                            }else{
                                echo "1";//no insertado
                            }
                        }else{
                            echo "2";//ya existe
                        }
                    }
                }else{
                    echo "3";
                }
            }
        }else{
            echo "4";
        }
    }
?>