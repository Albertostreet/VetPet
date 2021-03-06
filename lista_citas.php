<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Citas</title>
    <?php require_once 'styles.php'; ?>
    <script>
        $.get('backend/listaCitas.php', function(data){
            var respuesta = document.querySelector("#tabla");
            respuesta.innerHTML += data;
        }); 
        function Editar(id){
            $.post("backend/modificarInputsConLosDatosParaEditar.php", {id: id} , function(data){
                    if(data !== "1"){
                        var respuesta = document.querySelector("#inputs");
                        respuesta.innerHTML = data;
                    }
                });
        }
        function Enviar(id){
            var cliente = $("#cliente").val();
            var mascota = $("#mascota").val();
            var fecha = $("#fecha").val();
            
            if(cliente !== "" && mascota !== "" && fecha !== ""){
                $.post("backend/modificarCitaDatosNuevos.php", 
                {
                id: id,
                cliente: cliente,
                mascota: mascota,
                fecha: fecha
                },
                function(data){
                    if(data !== "1"){
                        $("#msg").show();
                        setTimeout(modificado,1000);
                    }
                });
            }
            
        }

        function Eliminar(id){
            $.post("backend/eliminarCita.php", {id: id}, function(data){
                if(data === "0"){
                    $("#eliminado").show();
                    setTimeout(eliminado,3000);
                }
            })
        }
        function eliminado(){
            $("#eliminado").hide();
            location.reload();
        }
        function modificado(){
            $("#msg").hide();
            location.reload();
        }
    </script>
</head>
<body>
    <?php require_once 'menu.php'; ?>
    <?php require_once 'menuCitas.php'; ?>
    <div class="Forma">
    <img src="img/fondocitas2.jpg" class="img">
        <div class="FormaCitas">
            <div id="inputs" class="divInputs">
                <div>
                    <div>Selecciona "Editar" en las opciones de la cita para comenzar</div>
                    <div>
                        <label for="">Cliente:</label><br>
                        <input type="text" name="cliente" id="cliente" readonly>
                    </div><br>
                    <div>
                        <label for="">Mascota:</label><br>
                        <input type="text" name="mascota" id="mascota" readonly>
                        </div><br>
                    <div>
                        <label for="">Fecha Deseada:</label><br>
                        <input type="date" name="" id="" readonly>
                    </div><br>
                </div>
            </div>
            <table id="tabla">
                <tr>
                    <td>ID</td>
                    <td>CLIENTE</td>
                    <td>MASCOTA</td>
                    <td>FECHA</td>
                    <td>EDITAR</td>
                    <td>ELIMINAR</td>
                </tr>
                <tr>
                </tr>
            </table>
            <div id="eliminado" style="display: none;">Eliminado con exito</div>
            <div id="msg" style="display: none;">Registrado</div>
        </div>
    </div>
</body>
</html>