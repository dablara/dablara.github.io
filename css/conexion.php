<?php
$servername = "172.31.19.0";
$username = "Foro";
$password = "Root1234$";
$db="Foro";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Conexión falla " . $conn->connect_error);
}
echo "Conexión exitosa";
?> 
