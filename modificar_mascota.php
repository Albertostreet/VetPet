<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Mascota</title>
    <?php require_once 'styles.php'; ?>
    <script>
        var id = <?php $id = $_POST['id']; echo $id;?>;
        if(id != null){
            $.post("backend/datosMascota.php", {id:id}, function(data){
                var elementoHTML = document.querySelector("#data");
                elementoHTML.innerHTML = data;
            });
        }
        function Enviar(id){
            var nombre = $("#nombre").val();
            var raza = $("#raza").val();
            var color = $("#color").val();
            var edad  = $("#edad").val();

            if(nombre !== "" && raza !== "" && color !== "" && edad > -1){
                $.post("backend/modificarMascota.php", {
                    nombre: nombre,
                    raza: raza,
                    color: color,
                    edad: edad,
                    id: id
                }, function(data){
                    if(data === "0"){
                        $("#insertado").show();
                        setTimeout(insertado,5000);
                        
                    }else if(data === "1"){
                        console.log("Error en el query 2");
                    }else if(data === "2"){
                        $("#msg1").show();
                        setTimeout(existe,2000);
                    }else if(data === "3"){
                        console.log("Error en el query");
                    }
                })
            }
            else{
                $("#msg").show();
                setTimeout(ocultarmsg,5000);
            }
        }
        function ocultarmsg(){
            $("#msg").hide();
        }
        function insertado(){
            $("#insertado").hide();
            window.location.replace("lista_mascotas.php");
        }
        function existe(){
            $("#msg1").hide();
        }
    </script>
</head>
<body>
    <?php require_once 'menu.php'; ?>
    <?php require_once 'menuMascotas.php'; ?>
    <div class="Forma">
    <img src="img/fondocitas2.jpg" class="img">
        <div class="FormaCitas">
            <div id="data">
            </div>
            <div id="msg" style="display: none;">Faltan campos por llenar</div>
            <div id="insertado" style="display: none;">Insertado con exito</div>
            <div id="msg1" style="display: none;">Ya existe este registro</div>
        </div>
    </div>
</body>
</html>