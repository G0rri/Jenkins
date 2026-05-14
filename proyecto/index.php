<?php
$host = 'db'; 
$user = 'root';
// Se lee la contraseña mediante el método getenv
$pass = getenv('ROOT_PASSWORD'); 
$db = 'mysql';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error: No se ha podido conectar a la base de datos. " . $conn->connect_error);
}
echo "¡Conexión exitosa a la base de datos!"; 
?>
