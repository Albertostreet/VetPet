<?php
    $id = $_POST['id'];
    require 'conecta.php';

    $sql = "SELECT * FROM clientes WHERE id=$id;";

    $respuesta = mysqli_query($conecta, $sql);

    if($respuesta){
        while($fila = mysqli_fetch_assoc($respuesta)){
            echo "<div>",
            "<label for=".'"nombre"'.">Nombre:</label><br>",
            "<input type=".'"text"'." name=".'"nombre"'." id=".'"nombre"'." value=".'"'.$fila['nombre'].'"'." >",
        "</div><br>",
        "<div>",
            "<label for=".'"direccion"'.">Direccion:</label><br>",
            "<input type=".'"text"'." name=".'"direccion"'." id=".'"direccion"'." value=".'"'.$fila['direccion'].'"'." >",
        "</div><br>",
        "<div>",
            "<label for=".'"correo"'.">Correo:</label><br>",
            "<input type=".'"text"'." name=".'"correo"'." id=".'"correo"'." value=".'"'.$fila['correo'].'"'." >",
        "</div><br>",
        "<div>",
            "<label for=".'"telefono"'.">Telefono:</label><br>",
            "<input type=".'"text"'." name=".'"telefono"'." id=".'"telefono"'." value=".'"'.$fila['telefono'].'"'." >",
        "</div><br>",
        "<div>",
            "<button onclick=".'"Enviar('.$fila['id'].');"'.">Enviar</button>",
        "</div>";
        }
    }else{
        echo "1";
    }
?>