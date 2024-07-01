<?php
include '../conexionBD/conexion.php';

if (isset($_GET['id'])) {
    $idLocal = $_GET['id'];
    $sql = "SELECT idLocal, nombrelocal, direccionlocal, telefono, telefono2, logo FROM bdplanillas.local WHERE idLocal = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idLocal);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $empresa = $result->fetch_assoc();
        echo json_encode($empresa);
    } else {
        echo json_encode(['error' => 'No se encontró la empresa.']);
    }

    $stmt->close();
}

$conn->close();
?>