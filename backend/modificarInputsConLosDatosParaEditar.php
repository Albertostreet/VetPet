<?php
    $id = $_POST['id'];
    require_once 'conecta.php';

    $sql = "SELECT * FROM citas WHERE `id`='$id'";

    $respuesta = mysqli_query($conecta, $sql);

    if($respuesta){
        while($fila = mysqli_fetch_assoc($respuesta)){
            echo "<div>",
            "<div>Ingresa los nuevos datos y da click en el boton 'Enviar Cambios' para registrar los cambios</div>",
            "<label for=".'"cliente"'.">Cliente:</label><br>",
            "<input type=".'"text"'." name=".'"cliente"'." id=".'"cliente"'." value=".'"'.$fila['cliente'].'"'." >",
            "</div><br>",
            "<div>",
                "<label for=".'"mascota"'.">Mascota:</label><br>",
                "<input type=".'"text"'." name=".'"mascota"'." id=".'"mascota"'." value=".$fila['mascota'].">",
            "</div><br>",
            "<div>",   
                "<label for=".'"fecha"'.">Fecha Deseada:</label><br>",
                "<input type=".'"date"'." name=".'"fecha"'." id=".'"fecha"'." value=".$fila['fecha'].">",
            "</div><br>",
            "<div><button onClick=".'"Enviar('.$fila['id'].');"'.">Enviar</button></div>";
        }
    }else{
        echo "1";
    }
?>