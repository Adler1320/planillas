<?php
include '../conexionBD/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idLocal = isset($_POST['idLocal']) ? $_POST['idLocal'] : null;
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono1 = $_POST['telefono1'];
    $telefono2 = $_POST['telefono2'];

    // Validar que los teléfonos sean solo números y tengan 8 caracteres
    if (!preg_match('/^[0-9]{8}$/', $telefono1) || !preg_match('/^[0-9]{8}$/', $telefono2)) {
        echo "Los números de teléfono deben ser de 8 dígitos.";
        exit;
    }

    $logoDestPath = null;
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
        // Información del archivo
        $logoTmpPath = $_FILES['logo']['tmp_name'];
        $logoFileName = $_FILES['logo']['name'];
        $logoFileExtension = strtolower(pathinfo($logoFileName, PATHINFO_EXTENSION));

        // Verifica si el tipo de archivo es una imagen permitida
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        if (!in_array($logoFileExtension, $allowedExtensions)) {
            echo "Tipo de archivo no permitido. Solo se permiten imágenes (jpg, jpeg, png).";
            exit;
        }

        // Establece la ruta de destino
        $logoDestPath = "../assets/img/logos/" . time() . "_" . $logoFileName;

        // Mueve el archivo temporal a la ruta deseada
        if (!move_uploaded_file($logoTmpPath, $logoDestPath)) {
            echo "Error al mover el archivo a la ubicación deseada.";
            exit;
        }
    }

    if ($idLocal) {
        // Actualizar datos de la empresa existente
        $sql = "UPDATE local SET nombrelocal = ?, direccionlocal = ?, telefono = ?, telefono2 = ?" . ($logoDestPath ? ", logo = ?" : "") . " WHERE idLocal = ?";
        $stmt = $conn->prepare($sql);
        if ($logoDestPath) {
            $stmt->bind_param("sssssi", $nombre, $direccion, $telefono1, $telefono2, $logoDestPath, $idLocal);
        } else {
            $stmt->bind_param("ssssi", $nombre, $direccion, $telefono1, $telefono2, $idLocal);
        }
    } else {
        // Insertar nueva empresa
        $sql = "INSERT INTO local (nombrelocal, direccionlocal, telefono, telefono2, logo) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $nombre, $direccion, $telefono1, $telefono2, $logoDestPath);
    }

    if ($stmt->execute()) {
        header("Location: ../empresas.php");
           exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
