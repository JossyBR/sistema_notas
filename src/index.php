<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="../styles.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistema de Notas</title>
</head>
<body>
    <div class="container d-flex flex-column align-items-center vh-100">
    <h1 class="mt-5 fw-bold display-3">Sistema de Notas</h1>
    <p class="mt-2 display-6 fw-bold">Bienvenidos!!!</p>
    
    <form method="POST" action="Usuarios/Controladores/Login.php" class="border p-5 rounded-4 mt-5" >
        
        <h1 class="mb-4">Inicio de Sesión</h1>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"  class="form-control"><br><br>
        <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña" class="form-control"><br><br>
        <div class="text-center">
            <input type="submit" value="Inicia Sesion" class="btn btn-dark">
        </div>
        
    </form>
    </div>
    
    
</body>
</html>