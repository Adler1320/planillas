<?php
include '../conexionBD/conexion.php';
header('Content-Type: application/json');
$response = array('status' => false, 'message' => 'Algo salió mal al intentar eliminar el puesto');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = json_decode(file_get_contents('php://input'), true);
    if(isset($data['idPuesto'])){
        $id_puesto= $data['idPuesto'];
        $stmt = $conn->prepare('DELETE FROM puestoempleado WHERE idpuestoempleado = ?');

        if($stmt){
            $stmt->bind_param('i', $id_puesto);
            if( $stmt->execute() ){
                $response['status'] = true;
                $response['message']= 'Puesto eliminado Correctamente';
            }else{
                $response['status'] = false;
                $response['message']= 'Hubo un problema al eliminar el puesto';
            }
        }else{
            $response['message'] = 'Error al preparar la consulta para eliminar el puesto';
        }

    }else{
        $response['message'] = 'No se proporcionó el ID del puesto a eliminar';
    }
}
echo json_encode($response);
?>