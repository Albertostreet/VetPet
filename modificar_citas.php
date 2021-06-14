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
    <img src="img/fondocitas2.jpg" class="img">
        <div class="FormaCitas">
            <div>
                <div id="inputs" class="divInputs">
                    <div>
                    <div>Selecciona "Editar" en las opciones de la cita para comenzar</div>
                    <div>
                        <label for="">Cliente:</label><br>
                        <input type="text" name="" id="" readonly>
                    </div><br>
                    <div>
                        <label for="">Mascota:</label><br>
                        <input type="text" name="" id="" readonly>
                        </div><br>
                    <div>
                        <label for="">Fecha Deseada:</label><br>
                        <input type="date" name="" id="" readonly>
                    </div><br>
                    </div>
                </div>
                <div>
                    <label for="cliente">Ingresa el nombre del cliente y da click para buscar las citas de ese cliente</label>
                    <input type="text" name="cliente" id="cliente" oninput="Buscar();">
                </div>
                
                <div id="modificado" style="display: none;">Modificado con exito</div>
            </div>
            <div>
                <Table>
                    <tr>
                        <td>ID</td>
                        <td>CLIENTE</td>
                        <td>MASCOTA</td>
                        <td>FECHA</td>
                        <td>EDITAR</td>
                    </tr>
                </Table>
                <table id="tabla">
                </table>
            </div>
        </div>
    </div>
</body>
</html>