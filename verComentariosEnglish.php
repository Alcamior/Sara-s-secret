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
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top ms-auto">
        <div class="container-fluid d-flex align-items-center">
            
            <!-- Logo -->
            <picture>
                <!-- Imagen para dispositivos móviles -->
                <source srcset="../assets/logo-min-negro.png" media="(max-width: 768px)">
                <!-- Imagen por defecto -->
                <img src="../assets/Logo.png" alt="Logo de Sara's Secret" class="img-fluid">
            </picture>
    
            <!-- Menu button for phones -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Menu -->
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
                            <li><a class="dropdown-item" href="../index.html">Español</a></li>
                            <li><a class="dropdown-item" href="readEnglish.php">Check out our reviews</a></li>
                            <li><a class="dropdown-item" href="https://techshop.webcindario.com/" target="_blank">Link to team's 9 website</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container" style="margin-top: 120px;">
        <h1 class="text-center" style="font-family: var(--titulo); color: var(--color-secundario);">Feedback from our customers</h1>

        <section class="comentarios-container mt-5">
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
            include('../verComentarios.php');
        ?>
            
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS (Asegúrate de que este enlace esté presente) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>