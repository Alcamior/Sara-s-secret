<?php
    // Verifica la conexión a la base de datos
    include('../src/config/bd.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // Eliminar el comentario con el ID correspondiente
        $sql = "DELETE FROM comentario WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        // Redirigir de vuelta a la página de comentarios
        header("Location: read.php");
        exit;
    }
  
?>