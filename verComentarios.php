<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Comentarios</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/Logo.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Comentarios Registrados</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Comentario</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comentarios as $comentario): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($comentario['id']); ?></td>
                        <td><?php echo htmlspecialchars($comentario['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($comentario['apellidos']); ?></td>
                        <td><?php echo htmlspecialchars($comentario['comentario']); ?></td>
                        <td><?php echo htmlspecialchars($comentario['email']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>