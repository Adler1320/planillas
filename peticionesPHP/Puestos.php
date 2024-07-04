<?php
include '../conexionBD/conexion.php';
header('Content-Type: application/json');
$response = array('status' => false, 'message' => 'Algo salió mal');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_action = $_POST['action'];

    switch ($_action) {
        case 'insert':
            $nombre_Puesto = $_POST['nombrePuesto'];
            $stmt = $conn->prepare("INSERT INTO puestoempleado (nombrepuesto) VALUES (?)");
            if ($stmt) {
                $stmt->bind_param("s", $nombre_Puesto);
                if ($stmt->execute()) {
                    $response['status'] = true;
                    $response['message'] = "Puesto Registrado Correctamente";
                } else {
                    $response['message'] = "Problema al registrar el puesto";
                }
                $stmt->close();
            }
            break;
        case 'update':
            $id_puesto = $_POST['idPuesto'];
            $nombre_puesto = $_POST['Puesto'];
            $stmt = $conn->prepare('UPDATE puestoempleado SET nombrepuesto=? WHERE idpuestoempleado = ?');

            if ($stmt) {
                $stmt->bind_param('si', $nombre_puesto, $id_puesto);
                if ($stmt->execute()) {
                    $response['status'] = true;
                    $response['message'] = "Puesto actualizado Correctamente";
                } else {
                    $response["status"] = false;
                    $response['message'] = "Problema para actualizar el puesto";
                }
            } else {
                $response['message'] = 'Error al prepara la consulta de actualización';
            }
            break;
        case 'delete':
            $id_puesto = $_POST['idPuesto'];
            $stmt = $conn->prepare('DELETE FROM puestoempleado WHERE idpuestoempleado = ?');
            if ($stmt) {
                $stmt->bind_param('i', $id_puesto);
                if ($stmt->execute()) {
                    $response['status'] = true;
                    $response['message'] = 'Puesto eliminado Correctamente';
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Hubo un problema al eliminar el puesto';
                }
            } else {
                $response['message'] = 'Error al preparar la consulta para eliminar el puesto';
            }
            break;
    }
}
echo json_encode($response);
?>