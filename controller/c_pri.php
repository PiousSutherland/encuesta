<?php
// Incluir el archivo de conexión
include "model/conexion_bd.php";
// Página 1: Datos Iniciales
if (!empty($_POST["btnsig"])) {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $sexo = htmlspecialchars($_POST["sexo"]);

    if (empty($nombre) || empty($email) || empty($sexo))
        echo "<script>alert('Por favor, rellena todos los campos.')</script>";
    else {
        // Insertar datos iniciales en la base de datos
        $sql = "INSERT INTO moda (nombre, email, sexo) VALUES ('$nombre', '$email', '$sexo')";

        if ($conexion->query($sql) === TRUE) {
            // Obtener el ID recién insertado
            $id_encuesta = $conexion->insert_id;

            // Redirigir a la siguiente página
            header("Location: views/seg.php?id_encuesta=$id_encuesta");
            exit();
        } else {
            echo "Error al insertar datos: " . $conexion->error;
        }
    }
}
