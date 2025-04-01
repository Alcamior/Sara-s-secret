<?php
    // Incluir el archivo de configuración de la base de datos
    include('../src/config/bd.php');

    // Verifica si se ha pasado el ID por la URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Consulta para obtener el comentario específico
        $sql = "SELECT * FROM comentario WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $comentario = $stmt->fetch(PDO::FETCH_ASSOC);

        include('../editForm.php');

        if (!$comentario) {
            echo "Comentario no encontrado.";
            exit;
        }
    } else {
        echo "ID no proporcionado.";
        exit;
    }
?>