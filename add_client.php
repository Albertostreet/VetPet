<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de clientes</title>
    <?php require_once 'styles.php'; ?>
    <link rel="stylesheet" type="text/css" href="nav_bar.css">
    <link rel="stylesheet" type="text/css" href="forms.css">

    <script>
        function Enviar(){
            var nombre = document.form01.nombre.value;
            var direccion = document.form01.direccion.value;
            var correo = $document.form01.correo.value;
            var telefono = document.form01.telefono.value;
            
            if(nombre !== "" && direccion !== "" && correo !== "" && telefono !== ""){
                document.form01.method = 'post';
                document.form01.action = 'backend/addClient.php';
                document.form01.submit();
            }
            else{
                $("#msg").show();
                setTimeout(ocultarmsg,5000);
            }
        }
        function ocultarmsg(){
            $("#msg").hide();
        }
        
    </script>
    <style>
        .Forma{
            background: url('fondo.jpg') no-repeat bottom right fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <?php require_once 'navBar.html'; ?>
    <div class="Forma">
        <div id="container">
            
            <form name="form01" action="backend/addClient.php" method="POST">
                <h2>Agregar Cliente</h2>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div>
                    <label for="direccion">Direccion:</label>
                    <input type="text" name="direccion" id="direccion">
                </div>
                <div>
                    <label for="correo">Correo:</label>
                    <input type="text" name="correo" id="correo">
                </div>
                <div>   
                    <label for="telefono">Telefono:</label>
                    <input type="text" name="telefono" id="telefono">
                </div>
                <div>
                    <input type="submit" onclick="Enviar();" value="Enviar">
                </div>

                <div id="msg" style="display: none;">Faltan campos por llenar</div>
            </form>
        </div>
    </div>
</body>
</html>