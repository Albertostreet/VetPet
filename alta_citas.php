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
                        setTimeout(insertado,5000);
                        
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
    <?php require_once 'menuCitas.php'; ?>
    <div class="Forma">
        
        <div class="FormaAltaCitas">
            <label for="cliente">Cliente:</label>
            <input type="text" name="cliente" id="cliente">
            <br>
            <label for="mascota">Mascota:</label>
            <input type="text" name="mascota" id="mascota">
            <br>
            <label for="fecha">Fecha Deseada:</label>
            <input type="date" name="fecha" id="fecha">
            <br>
            <input type="button" onclick="Enviar();" value="Enviar">
            <br>
            <div id="msg" style="display: none;">Faltan campos por llenar</div>
            <div id="insertado" style="display: none;">Insertado con exito</div>
        </div>
    </div>
</body>
</html>