<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Mascotas</title>

    <? require_once 'styles.php'; ?>
    <link rel="stylesheet" type="text/css" href="nav_bar.css">
    <link rel="stylesheet" type="text/css" href="forms.css">


    <script>
        function Enviar(){
            var id_client = $document.form01.id_client.value;
            var nombreMas = document.form01.nombre.value;
            var raza = document.form01.raza.value;
            var color = document.form01.color.value;
            var edad = document.form01.edad.value;
            
            if(nombreMas !== "" && id_client !== "" && raza !== "" && color !== "" && edad !== ""){
                document.form01.action = 'backend/addMascota.php';
                document.form01.method = 'post';
                document.form01.action = 'post';
                document.form01.action = 'post';
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
</head>
<body>
    <?php require_once 'navbar.html'; ?>

    <div id="container">

    <form name="form01" action="addMascotas.php" method="POST">
            <div> 
                <br><br>
                <label for="id_client">Id Cliente:</label>
                <input type="text" name="id_client" id="id_client">
            </div><br>
            <div>
                <label for="nombreMas">Nombre mascota:</label>
                <input type="text" name="nombreMas" id="nombreMas">
            </div><br>
            <div>   
                <label for="raza">Raza: </label>
                <input type="text" name="raza" id="raza">
            </div><br>
            <div>   
                <label for="color">Color: </label>
                <input type="text" name="color" id="color">
            </div><br>
            <div>   
                <label for="edad">Edad: </label>
                <input type="numer" name="edad" id="edad">
            </div><br>
            <div>
                <input type="submit" onclick="Enviar();" value="Enviar">
            </div><br>
            <div id="msg" style="display: none;">Faltan campos por llenar</div>
        </div>
    </div>
</body>
</html>