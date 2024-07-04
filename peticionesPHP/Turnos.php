<?php 
include '../conexionBD/conexion.php';
header('Content-Type: application/json');
$response = array('status' => false, 'message' => 'Algo salió mal');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    switch ($action) {
        case 'insert':
            $nombre_Turno = $_POST['nombreTurno'];
            $stmt = $conn->prepare("INSERT INTO turnoempleado (nombreturno) VALUES (?)");
            if ($stmt) {
                $stmt->bind_param("s", $nombre_Turno);
                if ($stmt->execute()) {
                    $response['status'] = true;
                    $response['message'] = "Turno Registrado Correctamente";
                } else {
                    $response['message'] = "Problema al registrar el Turno";
                }
                $stmt->close();
            }
            break;

        case 'update':
            $nombre_Turno = $_POST['Turno'];
            $id_Turno = $_POST['idTurno'];
            $stmt = $conn->prepare('UPDATE turnoempleado SET nombreturno=? WHERE idturnoempleado=?');
            if ($stmt) {
                $stmt->bind_param('si', $nombre_Turno, $id_Turno);
                if ($stmt->execute()) {
                    $response['status'] = true;
                    $response['message'] = "Turno Actualizado Correctamente";
                } else {
                    $response['message'] = "Problema al actualizar el Turno";
                }
                $stmt->close();
            }
            break;

        case 'delete':
            $id_Turno = $_POST['idTurno'];
            $stmt = $conn->prepare('DELETE FROM turnoempleado WHERE idturnoempleado=?');
            if ($stmt) {
                $stmt->bind_param('i', $id_Turno);
                if ($stmt->execute()) {
                    $response['status'] = true;
                    $response['message'] = "Turno Eliminado Correctamente";
                } else {
                    $response['message'] = "Problema al eliminar el Turno";
                }
                $stmt->close();
            }
            break;
    }
}

echo json_encode($response);
?>