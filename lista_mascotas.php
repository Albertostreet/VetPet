<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mascotas</title>
    
    <?php require_once 'styles.php'; ?>
    <link rel="stylesheet" type="text/css" href="nav_bar.css">

    <script>
        $.get('backend/listaMascotas.php', function(data){
            var respuesta = document.querySelector("#tabla");
            respuesta.innerHTML += data;
        }); 
        function Editar(){

        }

        function Eliminar(id){
            $.post('backend/eliminarMascota.php', {id: id}, function(data){
                console.log(data);
                location.reload();
            });
        }
    </script>
    <style>
        .Forma{
            background: url('fondo2.jpg') no-repeat bottom right fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            overflow: hidden;
        }
        .container{
            background-color: white;
            position: fixed;
            align-items: center;
            top: 20%;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0 auto;
            width: 1000px;
            max-height: 400px;
            border-radius: 25px;
            box-shadow: 14px 15px 5px 0px rgba(0,0,0,0.75);
        }
        table{
            width: 80%;
            background-color: white;
            border: 3px solid cornflowerblue;  
            max-height: 400px;   
        }
        th, td{
            border: 1px solid cornflowerblue;
            text-align:center;
        }
        th{
            background-color: cornflowerblue;
            color: white;
        }
        td a:hover {
            background: cornflowerblue;
            color: white;
        }
        .add {
            padding: 7px 345px;
            border: none;
            border-radius:5px;
            color: black;
            text-decoration:none;
            display:inline-block;
        }
        h2 {
            font-family: 'Open Sans Condensed', sans-serif;
            position: relative;
            margin-top: 25px;
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php require_once 'navBar.html'; ?>
    <div class="Forma">
        <div class="container"> 
            <table id="tabla">
            <h3>Lista de Mascotas</h3>
                <tr>
                    <th>ID</th>
                    <th>Nombre Mascota</th>
                    <th>Raza</th>
                    <th>Color</th>
                    <th>Edad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                <tr>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>