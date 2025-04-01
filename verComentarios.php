<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Comentarios - Sara's Secret</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/Logo.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background:rgb(236, 249, 255);
            color: #273951;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 900px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            color: #273951;
        }
        .table {
            border-radius: 15px;
            overflow: hidden;
        }
        .table th {
            background: #273951;
            color: white;
            text-align: center;
        }
        .table td {
            background:rgb(217, 241, 255);
            vertical-align: middle;
        }
        .comentario-card {
            border-radius: 12px;
            box-shadow: 0 4px 8px #273951;
            margin-bottom: 20px;
            padding: 15px;
            background: white;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <?php foreach ($comentarios as $comentario): ?>
            <div class="comentario-card">
                <h5><?php echo htmlspecialchars($comentario['nombre'] . ' ' . $comentario['apellidos']); ?></h5>
                <p><?php echo htmlspecialchars($comentario['comentario']); ?></p>
                <a href="edit.php?id=<?php echo $comentario['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                <a href="delete.php?id=<?php echo $comentario['id']; ?>"><i class="bi bi-trash"></i></a>
                <br>
                <small class="text-muted">✉️ <?php echo htmlspecialchars($comentario['email']); ?></small>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>