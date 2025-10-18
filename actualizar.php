<?php

// Incluye el archivo de conexión
require 'db_config.php';

//Comprueba que se hayan recibido los parámetros 'id' y 'estado' por URL (GET)
if (isset($_GET['id']) && isset($_GET['estado'])) {
    $id = $_GET['id'];
    $nuevo_estado = $_GET['estado'];

    //Validación de seguridad: se asegura que el estado sea un valor permitido
    if ($nuevo_estado == 'completada' || $nuevo_estado == 'pendiente') {

        //Consulta para Actualización (UPDATE)
        $sql = "UPDATE tareas SET estado = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nuevo_estado, $id]); // Ejecuta la actualización con los nuevos valores
    }
}

//Redirigir de vuelta
header('Location: index.php');
exit;