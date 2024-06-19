<?php
$host = 'localhost'; // Nombre del servidor de la base de datos
$dbname = 'bdplanillas'; // Nombre de la base de datos
$username = 'root'; // Nombre de usuario de MySQL
$password = ''; // Contraseña de MySQL

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    // Devuelve un JSON en caso de error
    echo json_encode(['success' => false, 'message' => 'Error de conexión: ' . $conn->connect_error]);
    exit;
}

?>