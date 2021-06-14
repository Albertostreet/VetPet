<?php

    $id = $_POST['id'];

    require 'conecta.php';

    $sql = "DELETE FROM `mascotas` WHERE id=$id";

    if(mysqli_query($conecta, $sql)){
        echo "0";
    }else{
        echo "1";
    }
?>