<?php
// ... Incluir archivo de conexión a la base de datos ...
include "../model/conexion_bd.php";
// Verificar si se proporciona el ID de la encuesta
if (!isset($_GET['id_encuesta'])) {
    header("Location: pagina1.php");
    exit();
}

$id_encuesta = $_GET['id_encuesta'];

// Página 3: Lugar de Compra
if (!empty($_POST["btnsig"])) {
    $lugar_de_compra = $_POST["lugar_de_compra"];

    // Actualizar la fila existente con el lugar de compra
    $sql = "UPDATE moda SET lugar_de_compra='$lugar_de_compra' WHERE id=$id_encuesta";
    
    if ($conexion->query($sql) === TRUE) {
        // Redirigir a la siguiente página o finalizar la encuesta
        // Puedes redirigir a otra página o mostrar un mensaje de éxito
        header("Location: gracias.php");
        exit();
    } else {
        echo "Error al actualizar datos: " . $conexion->error;
    }
}
?>
<!-- ... Formulario HTML para la página 3 ... -->
