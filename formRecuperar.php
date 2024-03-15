<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body class="background-image" onload="comprobar()">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Restablecer contraseña</h2>
            </div>
            <div class="card-body">
                <form id="loginForm">
                    <div class="form-group">
                        <label for="passwordnew">Contraseña nueva: </label>
                        <input type="passwordnew" class="form-control" id="passwordnew" name="passwordnew" required>
                    </div>
                    <div class="form-group">
                        <label for="passwordnew2">Repetir contraseña:</label>
                        <input type="passwordnew2" class="form-control" id="passwordnew2" name="passwordnew2" required>
                    </div>
                    <button type="button" class="btn btn-primary btn-block" onclick="cambiarContra()">Restablecer
                        contraseña</button>
                </form>
                <p id="errorMessage" class="text-danger mt-3"></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="static/js/script.js"></script>
</body>

</html>