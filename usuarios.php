<?php
include 'conexao.php';

session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != true) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];
    $sql = "DELETE FROM USUARIOS WHERE ID = $id";
    if ($conn->query($sql)) {
        echo "Usuário excluído com sucesso!";
    } else {
        echo "Erro ao excluir usuário: " . $conn->error;
    }
}

$sql = "SELECT * FROM USUARIOS";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
</head>
<body>
    <h1>Gerenciar Usuários</h1>
    <a href="adicionar_usuario.php">Adicionar Novo Usuário</a>
    <hr>
    <h2>Lista de Usuários</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Ativo</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['LOGIN']; ?></td>
                <td><?php echo $row['ATIVO'] ? 'Sim' : 'Não'; ?></td>
                <td>
                    <a href="editar_usuario.php?id=<?php echo $row['ID']; ?>">Editar</a> |
                    <a href="?excluir=<?php echo $row['ID']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
