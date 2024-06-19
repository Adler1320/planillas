<?php
include '../conexionBD/conexion.php';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['namecompleto'];
    $usuario = $_POST['user'];
    $password = $_POST['password']; // Encriptar la contraseña
    $local = $_POST['idLocal'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $estatus = $_POST['estatus'];

    // Manejo de la foto de perfil
    if (isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] == 0) {
        $foto_perfil = 'fotodeperfil/' . basename($_FILES['foto_perfil']['name']);
        move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $foto_perfil);
    } else {
        $foto_perfil = 'fotodeperfil/profile_default.jpg'; // Foto de perfil por defecto
    }

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuario (Nombre, username, pass, id_Local, tipodeusuario, estado, foto_perfil) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('sssssss', $nombre, $usuario, $password, $local, $tipo_usuario, $estatus, $foto_perfil);

        if ($stmt->execute()) {
            echo "Usuario agregado exitosamente.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }

}
?>