<?php
include '../conexionBD/conexion.php';
header('Content-Type: application/json');

$response = array('status' => false, 'message' => 'Algo salió mal');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Datos del formulario
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono1 = $_POST['telefono1'];
        $telefono2 = !empty($_POST['telefono2']) ? $_POST['telefono2'] : NULL;
        $logo = basename($_FILES['logo']['name']); // Asegura que solo el nombre del archivo sea usado
        $fileTmpPath = $_FILES['logo']['tmp_name'];
        $uploadPath = '../assets/img/logos/' . $logo; // Asegúrate de que la carpeta uploads exista

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($fileTmpPath, $uploadPath)) {
            // Preparar la consulta
            $stmt = $conn->prepare("INSERT INTO bdplanillas.local (nombrelocal, direccionlocal, telefono, telefono2, logo) VALUES (?, ?, ?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("sssss", $nombre, $direccion, $telefono1, $telefono2, $logo);

                // Ejecutar la consulta y verificar si fue exitosa
                if ($stmt->execute()) {
                    $response['status'] = true;
                    $response['message'] = 'Empresa registrada correctamente';
                } else {
                    $response['message'] = 'Hubo un problema al registrar la empresa';
                }

                $stmt->close();
            } else {
                $response['message'] = 'Error en la preparación de la consulta';
            }

            $conn->close();
        } else {
            $response['message'] = 'Hubo un problema al subir el archivo';
        }
    } else {
        $response['message'] = 'Método no permitido';
    }
} catch (Exception $e) {
    $response['message'] = 'Excepción capturada: ' . $e->getMessage();
}

echo json_encode($response);
?>