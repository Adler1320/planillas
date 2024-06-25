<?php
include '../conexionBD/conexion.php';

// Habilitar la visualización de errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['namecompleto'];
    $usuario = $_POST['user'];
    $password = $_POST['password']; // Asegúrate de encriptar la contraseña antes de almacenarla en producción
    $local = $_POST['idLocal'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $estatus = $_POST['estatus'];

    // Manejo de la foto de perfil
    if (isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] == 0) {
        $foto_perfil = '../assets/img/fotodeperfil/' . basename($_FILES['foto_perfil']['name']);
        if (!move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $foto_perfil)) {
            echo "Error al mover el archivo de la foto de perfil.";
            exit;
        }
    } else {
        $foto_perfil = '../assets/img/fotodeperfil/profile_default.jpg'; // Foto de perfil por defecto
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuario (Nombre, username, pass, id_Local, tipodeusuario, estado, foto_perfil) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('sssssss', $nombre, $usuario, $hashed_password, $local, $tipo_usuario, $estatus, $foto_perfil);

        if ($stmt->execute()) {
           // recargar la pagina   
         header("Location: ../usuarios.php");
           exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}
?>