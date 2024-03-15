<?php
require_once '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $passwordnew = $_POST['passwordnew'];
    $passwordnew2 = $_POST['passwordnew2'];
    
    if ($passwordnew === $passwordnew2){
        $tokenExiste = "SELECT * FROM recuperar WHERE token = '$token'";
        $resultado = $conn->query($tokenExiste);
    
        if ($resultado->num_rows > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            $contra = md5($passwordnew);
            $actualizarcontra = "UPDATE usuarios SET contrasena='$contra' WHERE id= ".$fila['id'];
            $link = "UPDATE recuperar SET link=NULL, fecha_inicio = NULL , fecha_fin= NULL, token=NULL,estado=0 WHERE id= ".$fila['id'];

            $resultado2 = $conn->query($actualizarcontra);
            $resultado3 = $conn->query($link);

            echo 'success';
        } else {
            echo 'Usuario no encontrado';
        }
    }else{
        echo 'Las contraseñas no son iguales';
    }

} else {
    header('Location: index.html');
}

$conn->close(); 
