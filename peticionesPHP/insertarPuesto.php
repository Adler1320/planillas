<?php 
include '../conexionBD/conexion.php';
header('Content-Type: application/json');
$response = array('status' => false, 'message' => 'Algo salió mal');
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $nombre_Puesto = $_POST['nombrePuesto'];
    $stmt = $conn->prepare("INSERT INTO puestoempleado (nombrepuesto) VALUES (?)");
    if($stmt){
        $stmt-> bind_param("s",$nombre_Puesto);
        if($stmt->execute()){
            $response['status']= true;
            $response['message']= "Puesto Registrado Correctamente";
        }else{
            $response['message']="Problema al registrar el puesto";
        }
    }
}
echo json_encode($response);
$stmt->close();
?>