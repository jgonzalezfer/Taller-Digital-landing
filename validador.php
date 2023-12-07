<?php
header('Content-Type: application/json');

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // ... lógica  ...
        
        echo json_encode(['message' => ' del phpDatos del formulario recibidos correctamente.']);
    } else {
        http_response_code(405);
        echo json_encode(['error' => 'Sólo se permiten peticiones POST']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error interno del servidor']);
}
?>
