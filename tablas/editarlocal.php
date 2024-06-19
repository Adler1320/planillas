<?php
include 'conexionBD/conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obtener los datos del local
    $sql = "SELECT idLocal, nombrelocal, direccionlocal, telefono, telefono2, logo FROM local WHERE idLocal = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(["error" => "No se encontraron datos para el ID proporcionado."]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["error" => "No se proporcionó un ID."]);
}
?>
