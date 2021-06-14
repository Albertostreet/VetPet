<?php
    $id = $_POST['id'];
    require 'conecta.php';

    $sql = "SELECT * FROM mascotas WHERE id=$id;";

    $respuesta = mysqli_query($conecta, $sql);

    if($respuesta){
        while($fila = mysqli_fetch_assoc($respuesta)){
            echo "<div>",
            "<label for=".'"nombre"'.">Nombre:</label><br>",
            "<input type=".'"text"'." name=".'"nombre"'." id=".'"nombre"'." value=".'"'.$fila['nombre'].'"'." >",
        "</div><br>",
        "<div>",
            "<label for=".'"raza"'.">Raza:</label><br>",
            "<input type=".'"text"'." name=".'"raza"'." id=".'"raza"'." value=".'"'.$fila['raza'].'"'." >",
        "</div><br>",
        "<div>",
            "<label for=".'"color"'.">Color:</label><br>",
            "<input type=".'"text"'." name=".'"color"'." id=".'"color"'." value=".'"'.$fila['color'].'"'." >",
        "</div><br>",
        "<div>",
            "<label for=".'"edad"'.">Edad:</label><br>",
            "<input type=".'"number"'." name=".'"edad"'." id=".'"edad"'." value=".'"'.$fila['edad'].'"'." >",
        "</div><br>",
        "<div>",
            "<button onclick=".'"Enviar('.$fila['id'].');"'.">Enviar</button>",
        "</div>";
        }
    }else{
        echo "1";
    }
?>