<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios - Sara's Secret</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/logo-min-negro.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Jaldi:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../public/styles.css">

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background-color: rgb(236, 249, 255);;
            color: #273951;
            font-family: 'Arial', sans-serif;
        }

        h1 {
            margin-bottom: 30px;
            padding-top: 60px;
            font-weight: bold;
            color: #273951;
        }

        button {
            margin-bottom: 50px;
        }

        input,
        textarea {
            box-shadow: 0 4px 8px #273951;
            background-color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top ms-auto">
        <div class="container-fluid d-flex align-items-center">
            
            <!-- Logo -->
            <picture>
                <!-- Imagen para dispositivos móviles -->
                <source srcset="../assets/logo-min-negro.png" media="(max-width: 768px)">
                <!-- Imagen por defecto -->
                <img src="../assets/Logo.png" alt="Logo de Sara's Secret" class="img-fluid">
            </picture>
    
            <!-- Botón de menú para teléfonos -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Menú -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="../index-english.html#contenedor-principal">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index-english.html#productos">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index-english.html#carrusel">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index-english.html#contactanos">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            More
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="../index-english.html">Español</a></li>
                            <li><a class="dropdown-item" href="read.php">Check out our reviews</a></li>
                            <li><a class="dropdown-item" href="https://techshop.webcindario.com/" target="_blank">Link to team's 9 website</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Edit Comment</h1>
        <form action="updateEnglish.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($comentario['id']); ?>">

            <div class="mb-3">
                <label for="nombre">Name</label>
                <br>
                <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($comentario['nombre']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="apellidos">Last names</label>
                <br>
                <input type="text" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($comentario['apellidos']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <br>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($comentario['email']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="mensaje">Message</label>
                <br>
                <textarea id="mensaje" name="mensaje" required><?php echo htmlspecialchars($comentario['comentario']); ?></textarea>
            </div>

            <button type="submit" class="boton">Update comment</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>