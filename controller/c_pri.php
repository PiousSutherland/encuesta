<?php
// Iniciar la sesión para poder usar variables de sesión
session_start();
// Incluir el archivo de conexión
include "model/conexion_bd.php";
// Página 1: Datos Iniciales
if (!empty($_POST["btnsig"])) {
    // Sanitizar
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $sexo = htmlspecialchars($_POST["sexo"]);

    if (empty($nombre) || empty($email) || empty($sexo))
        echo "<script>alert('Por favor, rellena todos los campos.')</script>";
    else {
        // Insertar datos iniciales en la base de datos
        $sql = "INSERT INTO moda (nombre, email, sexo) VALUES (?, ?, ?)";

        // Preparar y vincular sentencias
        $stmt = $conexion->prepare($sql);
        if ($stmt === false) {
            echo "Error al preparar la consulta: " . $conexion->error;
            exit(); // or handle the error appropriately
        }
        $stmt->bind_param("sss", $nombre, $email, $sexo);

        if ($stmt->execute()) {
            // Obtener el ID recién insertado
            $id_encuesta = $conexion->insert_id;

            // Redirigir a la siguiente página
            header("Location: views/seg.php?id_encuesta=$id_encuesta");
            exit();
        } else {
            echo "Error al insertar datos: " . $stmt->error;
        }

        // Cerrar conexion
        $stmt->close();
    }
}
