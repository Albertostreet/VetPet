<?php 
    require_once 'conecta.php';

    $sql = "SELECT * FROM clientes";

    $respuesta = mysqli_query($conecta, $sql);

    if($respuesta){
        while($fila = mysqli_fetch_assoc($respuesta)){
            echo "<tr>",
            "<td>". $fila['id'] ."</td>",
            "<td>". $fila['nombre'] ."</td>",
            "<td>". $fila['direccion'] ."</td>",
            "<td>". $fila['correo'] ."</td>",
            "<td>". $fila['telefono'] ."</td>",
            "<td><input type=". '"button"' ." onClick=".'"Editar();"'." value=".'"Editar"'."></td>",
            "<td><input type=". '"button"' ." onClick=".'"Eliminar('.$fila['id'].');"'." value=".'"Eliminar"'."></td>",
            "</tr>";
        }
    }else{
        echo "<tr></tr>";
    }
    
?>