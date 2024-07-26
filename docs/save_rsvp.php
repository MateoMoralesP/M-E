<?php

$servername = "localhost"; // Cambia esto si tu servidor es diferente
$username = "root"; // Tu usuario de MySQL
$password = ""; // Tu contraseña de MySQL
$dbname = "rsvp"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $guests = $_POST['guests'];
    
    $stmt = $conn->prepare("INSERT INTO rsvp (name, email, guests) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $email, $guests);
    
    if ($stmt->execute()) {
        $response = array("success" => true);
    } else {
        $response = array("success" => false, "error" => $stmt->error);
    }
    
    $stmt->close();
    $conn->close();
    
    echo json_encode($response);
}
?>
