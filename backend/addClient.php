<?php
     $nombre = $_POST['nombre'];
     $direccion = $_POST['direccion'];
     $correo = $_POST['correo'];
     $telefono = $_POST['telefono'];

     require_once 'conecta.php';

     $sql = "SELECT * FROM  `clientes` WHERE `nombre`='$nombre' AND `correo`='$correo'";

     if($respuesta = mysqli_query($conecta,$sql)){
          if($respuesta -> num_rows < 1){
               $sql = "INSERT INTO `clientes`(`nombre`, `direccion`, `correo`, `telefono`) VALUES ('$nombre','$direccion','$correo','$telefono')";

               if($respuesta = mysqli_query($conecta, $sql)){
                    header("location: ../clients_list.php");
               }else{
                    header("location: ../add_client.php");
               }
          }else{
               header("location: ../add_client.php");
          }
     }


?>