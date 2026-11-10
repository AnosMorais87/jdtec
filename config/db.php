<?php
$host = "localhost";
$user = "root";
$pass = "m64";
$db   = "sistema_contas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
