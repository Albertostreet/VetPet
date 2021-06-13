<?php

    $id = $_POST['id'];

    require_once 'conecta.php';

    $sql = "DELETE FROM `citas` WHERE `id`=$id";

    if($respuesta = mysqli_query($conecta, $sql)){
        echo "0";
    }else{
        echo "1";
    }

?>