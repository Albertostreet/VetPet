<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de citas</title>
    <?php require_once 'styles.php'; ?>
    
    <script>
        function Enviar(){
            var cliente = $("#cliente").val();
            var mascota = $("#mascota").val();
            var fecha = $("#fecha").val();
            
            
            if(cliente !== "" && mascota !== "" && fecha !== ""){
                $.post('backend/altaCita.php', 
                {cliente: cliente,
                mascota: mascota,
                fecha: fecha},
                function(data){
                    if(data === "0"){
                        $("#insertado").show();
                        setTimeout(insertado,2000);
                        
                    }else if(data === "1"){
                        console.log("Error en el query 2");
                    }else if(data === "2"){
                        $("#msg2").show();
                        setTimeout(existe,2000);
                    }else{
                        $("#msg3").show();
                        setTimeout(error,2000);
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
            window.location.replace("lista_citas.php");
        }
        function existe(){
            $("#msg2").hide();
        }
        function error(){
            $("#msg3").hide();
        }
    </script>
</head>
<body>
    <?php require_once 'menu.php'; ?>
    <?php require_once 'menuCitas.php'; ?>
    <div class="Forma">
    <img src="img/fondocitas2.jpg" class="img">
        <div class="FormaCitas">
            <div class="citasDiv">
                <div>Ingresa los datos del cliente, mascota y la fecha deseada para la cita</div><br>
                <div>Al finalizar da click en enviar para registrar la cita</div>
                <br>
                <label for="cliente">Cliente:</label><br>
                <input type="text" name="cliente" id="cliente"><br>
                <br>
                <label for="mascota">Mascota:</label><br>
                <input type="text" name="mascota" id="mascota"><br>
                <br>
                <label for="fecha">Fecha Deseada:</label><br>
                <input type="date" name="fecha" id="fecha"><br>
                <br>
                <input type="button" onclick="Enviar();" value="Enviar">
                <br>
                <div id="msg" style="display: none;">Faltan campos por llenar</div>
                <div id="insertado" style="display: none;">Insertado con exito</div>
                <div id="msg2" style="display: none;">Ya existe una cita con este cliente y fecha</div>
                <div id="msg3" style="display: none;">No existe este cliente o mascota en los registros</div>
            </div>
        </div>
    </div>
</body>
</html>