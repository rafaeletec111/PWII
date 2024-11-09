<?php
include 'conexao.php';

session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != true) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $login = $_POST['login'];
    $senha = !empty($_POST['senha']) ? password_hash($_POST['senha'], PASSWORD_DEFAULT) : null;
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    if ($senha) {
        $sql = "UPDATE USUARIOS SET LOGIN = '$login', SENHA = '$senha', ATIVO = $ativo WHERE ID = $id";
    } else {
        $sql = "UPDATE USUARIOS SET LOGIN = '$login', ATIVO = $ativo WHERE ID = $id";
    }

    if ($conn->query($sql)) {
        echo "Usuário atualizado com sucesso!";
        header('Location: usuarios.php');
    } else {
        echo "Erro ao editar usuário: " . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id_editar = $_GET['id'];
    $sql_editar = "SELECT * FROM USUARIOS WHERE ID = $id_editar";
    $result_editar = $conn->query($sql_editar);
    $usuario = $result_editar->fetch_assoc();
} else {
    header('Location: usuarios.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['ID']; ?>">
        <input type="text" name="login" value="<?php echo $usuario['LOGIN']; ?>" required>
        <input type="password" name="senha" placeholder="Nova senha (deixe em branco para não alterar)">
        <label for="ativo">Ativo</label>
        <input type="checkbox" name="ativo" <?php echo $usuario['ATIVO'] ? 'checked' : ''; ?>>
        <button type="submit" name="editar">Atualizar Usuário</button>
    </form>
</body>
</html>
