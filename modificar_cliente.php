<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
    <?php require_once 'styles.php'; ?>
    <script>
        var id = <?php $id = $_POST['id']; echo $id;?>;
        if(id != null){
            $.post("backend/datosCliente.php", {id:id}, function(data){
                var elementoHTML = document.querySelector("#data");
                elementoHTML.innerHTML = data;
            });
        }
        function Enviar(id){
            var nombre = $("#nombre").val();
            var direccion = $("#direccion").val();
            var correo = $("#correo").val();
            var telefono  = $("#telefono").val();

            if(nombre !== "" && direccion !== "" && correo !== "" && telefono !== ""){
                $.post("backend/modificarClientes.php", {
                    nombre: nombre,
                    direccion: direccion,
                    correo: correo,
                    telefono: telefono,
                    id: id
                }, function(data){
                    if(data === "0"){
                        $("#insertado").show();
                        setTimeout(insertado,5000);
                        
                    }else if(data === "1"){
                        console.log("Error en el query 2");
                    }else if(data === "2"){
                        console.log("Ya existe");
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
            window.location.replace("clients_list.php");
        }
    </script>
</head>
<body>
    <?php require_once 'menu.php'; ?>
    <?php require_once 'menuClientes.php'; ?>
    <div class="Forma">
    <img src="img/fondocitas2.jpg" class="img">
        <div class="FormaCitas">
            <div id="data">
            </div>
            <div id="msg" style="display: none;">Faltan campos por llenar</div>
            <div id="insertado" style="display: none;">Insertado con exito</div>
        </div>
    </div>
</body>
</html>