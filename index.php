<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Inicio de Sesión</h1>
    <form method="POST" action="Usuarios/Controladores/Login.php">
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"><br><br>
        <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña"><br><br>
        <input type="submit" value="Inicia Sesion">
    </form>
</body>
</html>