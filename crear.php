<?php

require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['descripcion'])) {
    $descripcion = $_POST['descripcion'];

    //Usar consultas de seguridad
    $sql = "INSERT INTO tareas (descripcion) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$descripcion]);
}

//Redirigir de vuelta a la página principal

header('Location: index.php');
exit;
