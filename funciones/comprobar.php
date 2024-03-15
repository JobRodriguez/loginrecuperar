<?php
require_once '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];

    $tokenExiste = "SELECT * FROM recuperar WHERE token = '$token'";
    $resultado = $conn->query($tokenExiste);

    if ($resultado->num_rows > 0) {

        echo 'success';
    } else {
        echo 'Usuario no encontrado';
    }
} else {
    header('Location: index.html');
}

$conn->close(); 
