<?php
include 'conexao.php';

session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != true) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['adicionar'])) {
    $login = $_POST['login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    $sql = "INSERT INTO USUARIOS (LOGIN, SENHA, ATIVO) VALUES ('$login', '$senha', $ativo)";
    if ($conn->query($sql)) {
        echo "Usuário adicionado com sucesso!";
        header('Location: usuarios.php');
    } else {
        echo "Erro ao adicionar usuário: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário</title>
</head>
<body>
    <h1>Adicionar Novo Usuário</h1>
    <form method="POST">
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <label for="ativo">Ativo</label>
        <input type="checkbox" name="ativo" checked>
        <button type="submit" name="adicionar">Adicionar Usuário</button>
    </form>
</body>
</html>
