<?php
$currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg text-bg-dark">
    <div class="container-fluid text-bg-dark ">
        <a class="navbar-brand text-light" href="#">Sistema de Notas</a>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light px-4" href="../../Administradores/Pages/index.php">Administradores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light px-4" href="../../Docentes/Pages/index.php">Docentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light px-4" href="../../Materias/Pages/index.php">Materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light px-4" href="../../Estudiantes/Pages/index.php">Estudiantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="../../Usuarios/Controladores/Salir.php">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-nav .nav-item .nav-link {
        border-bottom:1px solid transparent; /* Borde transparente por defecto */
        transition: border-bottom-color 0.3s; /* Transición suave para el cambio de color del borde */
    }

    .navbar-nav .nav-item:hover .nav-link,
    .navbar-nav .nav-item.active .nav-link {
        border-bottom-color: #fff; /* Cambiar el color del borde al pasar el ratón o cuando está activo */
    }

    .navbar-nav .nav-item .nav-link.active {
        background-color: rgba(255, 255, 255, 0.1); /* Fondo blanco opaco */
        border-radius: 0.25rem; /* Bordes redondos */
    }

</style>

<!-- <?php echo $currentPage === 'index' ? 'active' : ''; ?> -->
</body>
</html>