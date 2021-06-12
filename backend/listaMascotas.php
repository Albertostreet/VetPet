<?
    require_once 'conecta.php';

    $sqli = "SELECT * FROM mascotas";
    $respuesta = mysqli_query($conecta, $sql);

    if($respuesta){
        while($fila = mysqli_fetch_assoc($respuesta)){
            echo "<tr>",
            "<td>". $fila['nombreMas'] ."</td>",
            "<td>". $fila['raza'] ."</td>",
            "<td>". $fila['color'] ."</td>",
            "<td>". $fila['edad'] ."</td>",
            "<td><input type =". ' "button"' ."onClick=". '"Editar();"'. "value=".'"Editar"'."></td>", 
            "<td><input type =". '"button"' ."onClick=". '"Eliminar('.$fila['id'].');"' ."value=" .'"Eliminar"'."></td>",
            "</tr>";
        }
    }else {
        echo "<tr></tr>";
    }
    
?>