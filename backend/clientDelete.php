<?php
require_once 'conecta.php';

//recibe variables
$id = $_REQUEST['id'];

$sql = "DELETE FROM clientes WHERE id = $id";

if($res = mysqli_query($conecta, $sql)){
    echo "0"; //eliminado
}else{
    echo "1";//error en la eliminacion
}

header("Location: ../clients_list.php");
?>