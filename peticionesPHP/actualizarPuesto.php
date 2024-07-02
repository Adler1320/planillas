<?php include '../conexionBD/conexion.php';
header('Content-Type: application/json');
$response = array('status' => false, 'message' => 'Algo salió mal');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_puesto = $_POST['idPuesto'];
    $nombre_puesto = $_POST['Puesto'];
    $stmt = $conn->prepare('UPDATE puestoempleado SET nombrepuesto=? WHERE idpuestoempleado = ?');
    
    if($stmt){
        $stmt->bind_param('si', $nombre_puesto, $id_puesto);
        if($stmt->execute()){
            $response['status']= true;
            $response['message']="Puesto actualizado Correctamente";
        }else{
            $response["status"]= false;
            $response['message']="Problema para actualizar el puesto";
        }
    }else{
        $response['message']='Error al prepara la consulta de actualización';
    }
}
echo json_encode($response);
?>