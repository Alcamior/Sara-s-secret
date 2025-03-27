<?php
    // Verifica la conexión a la base de datos
    include('../src/config/bd.php');

    // Consulta para obtener todos los comentarios
    $sql = "SELECT * FROM comentario";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Obtener todos los registros
    $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Pasar los comentarios a la vista
    include('../verComentariosEnglish.php');
?>