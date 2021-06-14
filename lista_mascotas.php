<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mascotas</title>
    <?php require_once 'styles.php'; ?>
    <script>
        $.get('backend/listaMascotas.php', function(data){
            var respuesta = document.querySelector("#tabla");
            respuesta.innerHTML += data;
        }); 
        
        function Eliminar(id){
            $.post("backend/eliminarMascota.php", {id: id}, function(data){
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
    <?php require_once 'menuMascotas.php'; ?>
    <div class="Forma">
    <img src="img/fondocitas2.jpg" class="img">
        <div class="FormaCitas">
            <table id="tabla">
                <tr>
                    <td>ID</td>
                    <td>MASCOTA</td>
                    <td>RAZA</td>
                    <td>COLOR</td>
                    <td>EDAD</td>
                    <td>EDITAR</td>
                    <td>ELIMINAR</td>
                </tr>
                <tr>
                </tr>
            </table>
            <div id="eliminado" style="display: none;">Eliminado con exito</div>
        </div>
    </div>
</body>
</html>