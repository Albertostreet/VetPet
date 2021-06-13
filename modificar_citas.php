<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Citas</title>
    <?php require_once 'styles.php'; ?>
    <script>
        function Buscar(){
            var cliente = $("#cliente").val();
            if(cliente !== ""){
                $.post("backend/modificarCitasRegistradasPorCliente.php", {cliente: cliente} , function(data){
                    if(data !== "1"){
                        var respuesta = document.querySelector("#tabla");
                        respuesta.innerHTML = data;
                    }
                });
            }
        }
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
                        $("#modificado").show();
                        setTimeout(modificado,3000);
                    }
                });
            }
            
        }
        function modificado(){
            $("#modificado").hide();
            location.reload();
        }
    </script>
</head>
<body>
    <?php require_once 'menu.php'; ?>
    <?php require_once 'menuCitas.php'; ?>
    <div class="Forma">
        <div class="FormaAltaCitas">
            <div id="inputs" class="divInputs">
            </div>
            <div>
                <label for="cliente">Ingresa el nombre del cliente y da click para buscar las citas de ese cliente</label>
                <input type="text" name="cliente" id="cliente" >
                <input type="button" onclick="Buscar();" value="Buscar">
            </div>
            <Table>
                <tr>
                    <th>ID</th>
                    <th>CLIENTE</th>
                    <th>MASCOTA</th>
                    <th>FECHA</th>
                    <th>EDITAR</th>
                </tr>
            </Table>
            <table id="tabla">
            </table>
            <div id="modificado" style="display: none;">Modificado con exito</div>
        </div>
    </div>
</body>
</html>