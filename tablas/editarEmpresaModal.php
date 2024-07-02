
<?php
include '../conexionBD/conexion.php';
header('Content-Type: application/json');

$response = array('status' => false, 'message' => 'Algo salió mal');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Datos del formulario
        $idLocal = $_POST['idLocalEmp'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono1 = $_POST['telefono1'];
        $telefono2 = !empty($_POST['telefono2']) ? $_POST['telefono2'] : NULL;

        // Verificar si se subió un nuevo logo
        if (!empty($_FILES['logo']['name'])) {
            $logo = basename($_FILES['logo']['name']);
            $fileTmpPath = $_FILES['logo']['tmp_name'];
            $uploadPath = '../assets/img/logos/' . $logo;

            // Eliminar el logo anterior si existe
            $sql_select_logo = "SELECT logo FROM local WHERE idLocal = ?";
            $stmt_select_logo = $conn->prepare($sql_select_logo);
            $stmt_select_logo->bind_param('i', $idLocal);
            $stmt_select_logo->execute();
            $stmt_select_logo->bind_result($logo_antiguo);
            $stmt_select_logo->fetch();
            $stmt_select_logo->close();

            // Si hay un logo anterior, eliminarlo
            if ($logo_antiguo) {
                $ruta_logo_antiguo = '../assets/img/logos/' . $logo_antiguo;
                if (file_exists($ruta_logo_antiguo)) {
                    unlink($ruta_logo_antiguo);
                }
            }

            // Mover el nuevo logo a la carpeta de destino
            if (!move_uploaded_file($fileTmpPath, $uploadPath)) {
                $response['message'] = 'Hubo un problema al subir el nuevo logo';
                echo json_encode($response);
                exit;
            }
        }

        // Preparar la consulta para actualizar la empresa
        $sql = "UPDATE local SET nombrelocal = ?, direccionlocal = ?, telefono = ?, telefono2 = ?";
        $params = array($nombre, $direccion, $telefono1, $telefono2);
        if (!empty($_FILES['logo']['name'])) {
            $sql .= ", logo = ?";
            $params[] = $logo;
        }
        $sql .= " WHERE idLocal = ?";
        $params[] = $idLocal;

        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Vincular dinámicamente los parámetros
            $types = str_repeat('s', count($params));  // Todos los parámetros son de tipo string 's'
            $stmt->bind_param($types, ...$params);

            // Ejecutar la consulta y verificar si fue exitosa
            if ($stmt->execute()) {
                $response['status'] = true;
                $response['message'] = 'Empresa actualizada correctamente';
            } else {
                $response['message'] = 'Hubo un problema al actualizar la empresa';
            }

            $stmt->close();
        } else {
            $response['message'] = 'Error en la preparación de la consulta';
        }

        $conn->close();
    } else {
        $response['message'] = 'Método no permitido';
    }
} catch (Exception $e) {
    $response['message'] = 'Excepción capturada: ' . $e->getMessage();
}

echo json_encode($response);
?>
