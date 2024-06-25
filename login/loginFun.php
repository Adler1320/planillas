<?php
session_start();

// Incluir el archivo de conexión a la base de datos
require_once '../conexionBD/conexion.php';

header('Content-Type: application/json'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validar que los campos no estén vacíos (también se puede hacer en HTML con required)
    if (empty($username) || empty($password)) {
        echo json_encode(['success' => false, 'message' => "Campos vacíos."]);
        exit;
    }
    
    // Consulta para obtener el hash de la contraseña del usuario
    $sql = "SELECT idUsuario, username, pass FROM usuario WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Verificar si el usuario existe y la contraseña es correcta
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $pass = $row['pass'];
        if (password_verify($password, $pass)) {
       // if($password === $pass){
            // Login exitoso, guardar datos en la sesión
            $_SESSION['user_id'] = $row['idUsuario'];
            $_SESSION['username'] = $row['username'];
            
            // Preparar la respuesta en formato JSON
            echo json_encode(['success' => true]);
        } else {
            // Contraseña incorrecta
            echo json_encode(['success' => false, 'message' => "Nombre de usuario o contraseña incorrectos."]);
        }
    } else {
        // Usuario no encontrado
        echo json_encode(['success' => false, 'message' => "Nombre de usuario o contraseña incorrectos."]);
    }
    
    // Cerrar la conexión y liberar los recursos
    $stmt->close();
    $conn->close();
}
?>