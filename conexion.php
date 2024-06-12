<?php
$servername = "localhost";
$username = "id22306551_ever";
$password = "contraseña";
$dbname = "todo_list";
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}
?>
