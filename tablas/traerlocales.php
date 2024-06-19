<?php
include 'conexionBD/conexion.php';

// Consulta SQL para obtener los nombres y IDs de los locales
$sql_locales = "SELECT idLocal, nombrelocal FROM local";
$result_locales = $conn->query($sql_locales);

if ($result_locales->num_rows > 0) {
    while ($row = $result_locales->fetch_assoc()) {
        echo "<option data-id='" . $row['idLocal'] . "' value='" . $row['nombrelocal'] . "'>" . $row['nombrelocal'] . "</option>";
    }
} else {
    echo "<option>No hay locales disponibles</option>";
}

$conn->close();
?>