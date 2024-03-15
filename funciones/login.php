<?php
require_once '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usuarioExiste = "SELECT * FROM usuarios WHERE usuario = '$username'";
    $resultado = $conn->query($usuarioExiste);

    if ($resultado->num_rows > 0) {

        $fila = mysqli_fetch_assoc($resultado);
        $contrasenaAlmacenada = $fila['contrasena'];
        $contrasenaMd5 = md5($password);

        if ($contrasenaAlmacenada === $contrasenaMd5) {
            session_start();
            $_SESSION['usuario'] = $username;
            echo 'success';
        } else {
            echo 'Contraseña_incorrecta';
        }
        
    } else {
        echo 'Error';
    }
} else {
    header('Location: index.html');
}

$conn->close(); 
