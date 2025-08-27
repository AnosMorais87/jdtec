<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Arquivos</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f3f4f6; text-align: center; padding: 50px; }
    h1 { color: #333; }
    a { display: inline-block; margin: 10px; padding: 12px 20px; text-decoration: none; 
        color: white; background: #2563eb; border-radius: 6px; }
    a:hover { background: #1e40af; }
  </style>
</head>
<body>
  <h1>📂 Sistema de Envio de Arquivos</h1>

  <?php if (!isset($_SESSION['id'])): ?>
      <!-- Usuário não logado -->
      <p>Bem-vindo! Faça login ou cadastre-se para começar.</p>
      <a href="login.php">Login</a>
      <a href="cadastro.php">Cadastro</a>
  <?php else: ?>
      <!-- Usuário logado -->
      <p>Olá, <strong><?php echo $_SESSION['nome']; ?></strong>! Você está logado.</p>
      <a href="enviar.php">Enviar Arquivo</a>
      <a href="arquivos.php">Meus Arquivos</a>
      <a href="logout.php" style="background:#ef4444;">Sair</a>
  <?php endif; ?>
</body>
</html>
