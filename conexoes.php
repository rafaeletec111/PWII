<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "pw_bd";
 
$script = "CREATE DATABASE PW_BD;
        USE PW_BD;
        CREATE TABLE PRODUTOS (
            ID INT PRIMARY KEY AUTO_INCREMENT,
            DESCRICAO VARCHAR(150) NOT NULL,
            CODIGO_BARRA VARCHAR(25) NOT NULL,
            IMAGEM VARCHAR(50),
            VALOR VARCHAR(100),
            ATIVO BIT NOT NULL
 
        );"
        ;
 
 
$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if($conexao->connect_error) {
    die("falha na conexão: ".$conexao->connect_error);
}
 
?>
 