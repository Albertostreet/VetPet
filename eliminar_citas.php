<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Citas</title>
    <?php require_once 'styles.php'; ?>
    <script>
        function Buscar(){
            var cliente = $("#cliente").val();
            if(cliente !== ""){
                $.post("backend/eliminarCitasRegistradasPorCliente.php", {cliente: cliente} , function(data){
                    if(data !== "1"){
                        var respuesta = document.querySelector("#tabla");
                        respuesta.innerHTML = data;
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
    </script>
</head>
<body>
    <?php require_once 'menu.php'; ?>
    <?php require_once 'menuCitas.php'; ?>
    <div class="Forma">
    <img src="img/fondocitas2.jpg" class="img">
        <div class="FormaCitas">
            <div>
                <label for="cliente">Ingresa el nombre del cliente y da click para buscar las citas de ese cliente</label>
                <input type="text" name="cliente" id="cliente" oninput="Buscar();">
                <Table>
                    <tr>
                        <td>ID</td>
                        <td>CLIENTE</td>
                        <td>MASCOTA</td>
                        <td>FECHA</td>
                        <td>ELIMINAR</td>
                    </tr>
                </Table>
                <table id="tabla">
                </table>
                <div id="eliminado" style="display: none;">Eliminado con exito</div>
            </div>
        </div>
    </div>
</body>
</html>