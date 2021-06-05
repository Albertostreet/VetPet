<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="nav_bar.css">
    
    <title>Lista de Clientes</title>
    <?php require_once 'styles.php'; ?>
    <script>
        $.get('backend/clientsList.php', function(data){
            var respuesta = document.querySelector("#tabla");
            respuesta.innerHTML += data;
        }); 
        function Editar(){

        }

        function Eliminar(id){
            $.post('backend/clientDelete.php', {id: id}, function(data){
                console.log(data);
                location.reload();
            });
        }
    </script>

    <style>
        td a:hover {
            background: #6155a6;
        }
        .add {
            padding: 7px 430px;
            border: none;
            border-radius:5px;
            background-color:#c67ace;
            color: white;
            text-decoration:none;
            display:inline-block;
        }
    </style>
</head>
<body>
    <?php require_once 'navBar.html'; ?>
    
    <div class="Forma">
        <table id="tabla">
            <tr>
                <td colspan="7"><a href="add_client.php" class="add">+ NUEVO CLIENTE</a></td>
            </tr>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DIRECCION</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            <tr>
            </tr>
        </table>
    </div>
</body>
</html>