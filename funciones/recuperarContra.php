<?php
require_once '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    $usuarioExiste = "SELECT * FROM usuarios WHERE usuario = '$username'";
    $resultado = $conn->query($usuarioExiste);

    if ($resultado->num_rows > 0) {
        $fechaInicio = date('Y-m-d H:i:s', strtotime('-7 hours')); // Fecha y hora actual menos 7 horas
        $fechaFinal = date('Y-m-d H:i:s', strtotime('+15 seconds -7 hours')); // Fecha y hora actual más 5 minutos menos 7 horas        
        $fila = mysqli_fetch_assoc($resultado);
        $token = sha1($fila["usuario"].$fila['contrasena'].$fechaInicio);
        $link = 'http://localhost/universidad/loginrecuperar/formRecuperar.php?token='.$token;
        $Generarlink = "UPDATE recuperar SET link='$link', fecha_inicio = '$fechaInicio' , fecha_fin= '$fechaFinal', token='$token',estado=1 WHERE id= ".$fila['id'];
        $resultado2 = $conn->query($Generarlink);

        $response = array(
            'success' => 'success',
            'link' => $link
        );
        echo json_encode($response);

    } else {
        echo 'Usuario no encontrado';
    }
} else {
    header('Location: index.html');
}

$conn->close(); 
