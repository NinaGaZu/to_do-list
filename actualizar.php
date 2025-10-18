<?php

require 'db_config.php';

if (isset($_GET['id']) && isset($_GET['estado'])) {
    $id = $_GET['id'];
    $nuevo_estado = $_GET['estado'];

    //Validar que el estado sea uno de los permitidos
    if ($nuevo_estado == 'completada' || $nuevo_estado == 'pendiente') {
        $sql = "UPDATE tareas SET estado = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nuevo_estado, $id]);
    }
}

//Redirigir de vuelta
header('Location: index.php');
exit;