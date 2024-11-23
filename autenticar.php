<?php
session_start();
include "conexao.php";
if ( (isset($_POST["login"]) && !empty($_POST["login"]) ) && (isset ($_POST["senha"]) && !empty($_POST["senha"]) ) ) {
    $sql = "Select Id from Usuarios where Login = ' $_POST[login] ' AND Senha = '$_POST[senha]'";
    $resultado = $conexao->query($sql);
if($resultado ->num_rows() > 0)
{
    $usuario = $resultado->fetch_assoc();
    $idUsuario = $usuario['Id'];
    $_SESSION["UsuarioLogado"] = $_POST["login"];
    $_SESSION["Permissoes"] = [];
    $sql_permissoes = "Select Role from USUARIOS_PERMISSOES inner join on (Permissioes.Id = USUARIOS_PERMISSOES.Id where Usuario_Id = $idUsuario";
    $resultado_permissoes = $conexao -> query ($sql_permissoes);

    
}
}