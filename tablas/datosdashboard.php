<?php
// Incluir el archivo de conexión
include 'conexionBD/conexion.php';

// SQL para contar la cantidad de locales
$sql = "SELECT COUNT(*) AS total_locales FROM local";
$result = $conn->query($sql);

// Inicializar la variable para el conteo de locales
$total_locales = 0;

// Verificar y obtener el resultado
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $total_locales = $row["total_locales"];
}

// Cerrar la conexión
$conn->close();
?>