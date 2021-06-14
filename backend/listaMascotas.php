<?php

    require 'conecta.php';

    $sql = "SELECT * FROM mascotas";

    $respuesta = mysqli_query($conecta, $sql);

    if($respuesta){
        while($fila = mysqli_fetch_assoc($respuesta)){
            echo "<tr>",
            "<td>". $fila['id'] ."</td>",
            "<td>". $fila['nombre'] ."</td>",
            "<td>". $fila['raza'] ."</td>",
            "<td>". $fila['color'] ."</td>",
            "<td>". $fila['edad'] ."</td>",
            "<td>",
                "<form action=".'"modificar_mascota.php"'." method=".'"POST"'.">",
                "<input type=".'"text"'." name=".'id'." value=".'"'.$fila['id'].'"'." style=".'display:'.'none;'.">",
                "<input type=".'"submit"'." value=".'"Editar"'.">",
                "</form>",
            "</td>",
            "<td><button onclick=".'"Eliminar('.$fila['id'].');"'.">Eliminar</button></td>",
            "</tr>";
        }
    }else{
        echo "<tr>e</tr>";
    }
?>