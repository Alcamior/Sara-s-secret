<?php
// Incluir el archivo de configuración de la base de datos
include('../src/config/bd.php');

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $appellidos = $_POST['apellidos'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    // Consulta SQL para insertar los datos
    $sql = "INSERT INTO comentario (nombre, apellidos, comentario, email) VALUES (:nombre, :apellidos, :mensaje, :email)";

    // Preparar y ejecutar la consulta
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellidos', $appellidos);
    $stmt->bindParam(':mensaje', $mensaje);
    $stmt->bindParam(':email', $email);

    $stmt->execute();

    header("Location: ../index-english.html");
  
}
?>
