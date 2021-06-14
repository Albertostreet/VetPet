<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de mascotas</title>
    <?php require_once 'styles.php'; ?>
    
    <script>
        function Enviar(){
            var nombre = $("#nombre").val();
            var raza = $("#raza").val();
            var color = $("#color").val();
            var edad = $("#edad").val();
            
            
            if(nombre !== "" && raza !== "" && color !== "" && edad > -1){
                $.post('backend/altaMascotas.php', 
                {nombre: nombre,
                raza: raza,
                color: color,
                edad: edad},
                function(data){
                    if(data === "0"){
                        $("#insertado").show();
                        setTimeout(insertado,5000);
                        
                    }else if(data === "1"){
                        console.log("Error en el query 2");
                    }else if(data === "2"){
                        console.log("Ya existe");
                    }else if(data === "3"){
                        console.log("Error en el query");
                    }
                })
            }
            else{
                $("#msg").show();
                setTimeout(ocultarmsg,5000);
            }
        }
        function ocultarmsg(){
            $("#msg").hide();
        }
        function insertado(){
            $("#insertado").hide();
        }
    </script>
</head>
<body>
    <?php require_once 'menu.php'; ?>
    <?php require_once 'menuMascotas.php'; ?>
    <div class="Forma">
    <img src="img/fondocitas2.jpg" class="img">
        <div class="FormaCitas">
            <div class="citasDiv">
                <div>Ingresa los datos de la mascota</div><br>
                <div>Al finalizar da click en enviar para registrar la mascota</div>
                <br>
                <label for="nombre">Nombre de la mascota:</label><br>
                <input type="text" name="nombre" id="nombre"><br>
                <br>
                <label for="raza">Raza:</label><br>
                <input type="text" name="raza" id="raza"><br>
                <br>
                <label for="color">Color:</label><br>
                <input type="text" name="color" id="color"><br>
                <br>
                <label for="edad">Edad:</label><br>
                <input type="number" name="edad" id="edad"><br>
                <br>
                <input type="button" onclick="Enviar();" value="Enviar">
                <br>
                <div id="msg" style="display: none;">Faltan campos por llenar</div>
                <div id="insertado" style="display: none;">Insertado con exito</div>
            </div>
        </div>
    </div>
</body>
</html>