<?  
    $nombreMas = $_POST['nombreMas'];
    $raza = $_POST['raza'];
    $color = $_POST['color'];
    $edad = $_POST['edad'];

    require_once 'conecta.php';

    $sqli = "INSERT INTO `clientes`(`nombreMas`, `raza`, `color`, `edad`)
    VALUES ('$nombreMas', '$raza', '$color', '$edad')";

    if($respuesta = mysqli_query($conecta, $sql)){
        echo "0";
    } else{
        echo "1";
    }
    
?>