<?php
require "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome  = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Verificar se o email já existe
    $check = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "Este email já está cadastrado.";
        exit;
    }

    // Inserir novo usuário
    $sql = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $nome, $email, $senha);

    if ($sql->execute()) {
        echo "Cadastro realizado com sucesso!";
        echo "<br><a href='login.php'>Ir para o login</a>";
    } else {
        echo "Erro ao cadastrar: " . $sql->error;
    }
}
?>

<h2>Cadastrar</h2>
<form method="POST">
    Nome:<br>
    <input type="text" name="nome" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Senha:<br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Cadastrar</button>
</form>
