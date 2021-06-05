<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro Mascotas</title>

    <? require_once 'styles.php'; ?>
    <link rel="stylesheet" type="text/css" href="nav_bar.css">
    <link rel="stylesheet" type="text/css" href="forms.css">

    <script>
        function Enviar(){
            var nombreMas = document.form01.nombreMas.value;
            var id_client = $document.form01.id_client.value;
            var raza = document.form01.raza.value;
            var color = document.form01.color.value;
            var edad = document.form01.edad.value;
            
            if(nombreMas !== "" && nombreClient !== "" && id_client !== "" && raza !== "" && color !== "" && edad !== ""){
                document.form01.method = 'post';
                document.form01.action = 'backend/addClient.php';
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
    <?php require_once 'navBar.html'; ?>
    
    <div id="container">
        
        <form name="form01" action="addMascotas.php" method="POST">
            <h2>Agregar Mascota</h2>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="id_dueño">Id dueño:</label>
                <input type="text" name="id_dueño" id="id_dueño">
            </div>
            <div>
                <label for="raza">Raza:</label>
                <input type="text" name="raza" id="raza">
            </div>
            <div>   
                <label for="color">Color:</label>
                <input type="text" name="color" id="color">
            </div>
            <div>   
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad">
            </div>
            <div>
                <input type="submit" onclick="Enviar();" value="Enviar">
            </div>

            <div id="msg" style="display: none;">Faltan campos por llenar</div>
    </form>
    </div>
</body>
</html>