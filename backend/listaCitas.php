<?php 
    require_once 'conecta.php';

    $sql = "SELECT * FROM citas";

    $respuesta = mysqli_query($conecta, $sql);

    if($respuesta){
        while($fila = mysqli_fetch_assoc($respuesta)){
            echo "<tr>",
            "<td>". $fila['id'] ."</td>",
            "<td>". $fila['cliente'] ."</td>",
            "<td>". $fila['mascota'] ."</td>",
            "<td>". $fila['fecha'] ."</td>",
            "<td><input type=". '"button"' ." onClick=".'"Editar();"'." value=".'"Editar"'."></td>",
            "<td><input type=". '"button"' ." onClick=".'"Eliminar();"'." value=".'"Eliminar"'."></td>",
            "</tr>";
        }
    }else{
        echo "<tr></tr>";
    }
    
?>