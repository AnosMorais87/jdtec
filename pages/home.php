<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("Location: ../auth/login.php");
    exit;
}
?>

<h2>Bem-vindo, <?php echo $_SESSION["usuario_nome"]; ?>!</h2>
<a href="../auth/logout.php">Sair</a>
