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
            "<td><input type=". '"button"' ." onClick=".'"Eliminar('.$fila['id'].');"'." value=".'"Eliminar"'."></td>",
            "</tr>";
        }
    }else{
        echo "1";
    }
?>