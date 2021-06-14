<?php
    $cliente = $_POST['cliente'];
    require_once 'conecta.php';

    $sql = "SELECT * FROM citas WHERE cliente='$cliente'";

    $respuesta = mysqli_query($conecta, $sql);

    if($respuesta){
        while($fila = mysqli_fetch_assoc($respuesta)){
            echo "<tr>",
            "<td>". $fila['id'] ."</td>",
            "<td>". $fila['cliente'] ."</td>",
            "<td>". $fila['mascota'] ."</td>",
            "<td>". $fila['fecha'] ."</td>",
            "<td><button onclick=".'"Editar('.$fila['id'].');"'.">Editar</button></td>",
            "</tr>";
        }
    }else{
        echo "1";
    }
?>