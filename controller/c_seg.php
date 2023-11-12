<?php
include "../model/conexion_bd.php";
// Verificar si se proporciona el ID de la encuesta
if (!isset($_GET['id_encuesta'])) {
    header("Location: pagina1.php");
    exit();
}

$id_encuesta = $_GET['id_encuesta'];

// Página 2: Edad y Tipo de Indumentaria
if (!empty($_POST["btnsig"])) {
    $edad = $_POST["edad"];
    $tipo_indumentaria = $_POST["tipo_indumentaria"];

    // Actualizar la fila existente con la edad y el tipo de indumentaria
    $sql = "UPDATE moda SET edad='$edad', tipo_indumentaria='$tipo_indumentaria' WHERE id=$id_encuesta";
    
    if ($conexion->query($sql) === TRUE) {
        // Redirigir a la siguiente página o finalizar la encuesta
        header("Location: ter.php?id_encuesta=$id_encuesta");
        exit();
    } else {
        echo "Error al actualizar datos: " . $conexion->error;
    }
}
?>
