<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mascotas</title>
    <?php require_once 'styles.php'; ?>
    <script>
        $.get('backend/lista_mascotas.php', function(data){
            var respuesta = document.querySelector("#tabla");
            respuesta.innerHTML += data;
        }); 
        function Editar(){

        }

        function Eliminar(){

        }
    </script>
</head>
<body>
    <?php require_once 'menu.php'; ?>
    <div class="Forma">
        <table id="tabla">
            <tr>
                <th>ID</th>
                <th>CLIENTE</th>
                <th>NOMBRE MASCOTA</th>
                <th>RAZA</th>
                <th>COLOR</th>
                <th>EDAD</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            <tr>
            </tr>
        </table>
    </div>
</body>
</html>