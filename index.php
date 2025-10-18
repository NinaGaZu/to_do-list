<?php
//Conexión a la base de datos
require 'db_config.php';

//Consultar  todas las tareas
$stmt = $pdo->prepare('SELECT * FROM tareas ORDER BY id DESC');
$stmt->execute();
$tareas = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Tareas</h1>

        <!-- Formulario para añadir tareas -->
        <form action="crear.php" method="POST">
            <input type="text" name="descripcion" placeholder="Nueva tarea" required>
            <button type="submit">Añadir</button>
        </form>

      <div class="lista-de-tareas">
    <?php 
    // Recorrer el array de tareas
    foreach ($tareas as $tarea): 
    ?>
        <div class="tarea-item">
            <span style="text-decoration: <?php echo $tarea['estado'] == 'completada' ? 'line-through' : 'none'; ?>">
                <?php echo htmlspecialchars($tarea['descripcion']); ?>
            </span>
            
            <a href="actualizar.php?id=<?php echo $tarea['id']; ?>&estado=<?php echo $tarea['estado'] == 'pendiente' ? 'completada' : 'pendiente'; ?>">
                [<?php echo $tarea['estado'] == 'pendiente' ? 'Completar' : 'Pendiente'; ?>]
            </a>
            
            <a href="eliminar.php?id=<?php echo $tarea['id']; ?>">
                Eliminar
            </a>
        </div>
    <?php 
    // Fin del bucle
    endforeach; 
    ?>
</div>