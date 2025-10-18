<?php

//Incluye el archivo de conexión
require 'db_config.php';

//Comprueba que se haya recibido el parámetro 'id' por URL (GET)
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //Consulta para Eliminación (DELETE)
    $sql = "DELETE FROM tareas WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]); // Ejecuta la eliminación con el id proporcionado
}

//Redirigir de vuelta
header('Location: index.php');
exit;
