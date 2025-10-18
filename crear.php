<?php

// Incluye el archivo de conexión a la base de datos
require 'db_config.php';

//Comprueba si la solicitud es POST y si el campo 'descripcion' no está vacío
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['descripcion'])) {
    $descripcion = $_POST['descripcion'];

    // Consulta para Inserción (CREATE)
    // Usar consultas preparadas para seguridad (evitar inyección SQL)
    $sql = "INSERT INTO tareas (descripcion) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$descripcion]);
}

//Redirigir de vuelta a la página principal después de la acción
header('Location: index.php');
exit; // Es crucial llamar a exit() después de un header Location para detener la ejecución del script
