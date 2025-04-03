<?php
// Incluir el archivo de configuración de la base de datos
include('../src/config/bd.php');

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    // Consulta SQL para actualizar el comentario
    $sql = "UPDATE comentario SET nombre = :nombre, apellidos = :apellidos, comentario = :mensaje, email = :email WHERE id = :id";

    // Preparar y ejecutar la consulta
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellidos', $apellidos);
    $stmt->bindParam(':mensaje', $mensaje);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    // Redirigir de vuelta a la página de comentarios
    header("Location: readEnglish.php");
    exit;
}
?>
