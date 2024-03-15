<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body class="fondo-image">
    <div class="container mt-5">
        <div class="card-dashboard">
            <div class="card-header">
            <h2 class="text-center titleDash">Bienvenido al Dashboard, <?php echo $_SESSION['usuario']; ?></h2>
            </div>
            <div class="card-body">
                <p class="exito">¡Has iniciado sesión con éxito!</p>
            </div>
        </div>
        <a href="funciones/cerrar.php">Cerrar sesion</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="static/js/script.js"></script>
</body>
</html>
