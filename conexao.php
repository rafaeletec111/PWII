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
            VALOR DECIMAL(10,2) NOT NULL,
            ATIVO BIT NOT NULL
 
        );
        INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRA, VALOR, ATIVO) VALUES ('Amendoin verde','73173172317732',5.50, 1);
        INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRA, VALOR, ATIVO) VALUES ('Goabinha','12313123131123',1.50, 1);
        INSERT INTO produtos (DESCRICAO, VALOR, CODIGO_BARRA, ATIVO) VALUES
        ('Camiseta Estampada - 100% Algodão', 49.90, '1234567890123', 1),
        ('Tênis Esportivo - Conforto e Estilo', 299.90, '1234567890124', 1),
        ('Smartphone XPro - 128GB, Câmera 48MP', 1999.00, '1234567890125', 1),
        ('Caderno Universitário - 200 Folhas', 29.90, '1234567890126', 1),
        ('Mochila de Couro - Elegante e Espaçosa', 249.90, '1234567890127', 1),
        ('Fone de Ouvido Bluetooth - Cancelamento de Ruído', 149.90, '1234567890128', 1),
        ('Relógio Digital - À Prova D\'água', 199.90, '1234567890129', 1),
        ('Lavadora de Roupas - 10Kg', 1599.00, '1234567890130', 1),
        ('Batedeira Elétrica - 5 Velocidades', 399.90, '1234567890131', 1),
        ('Kit de Maquiagem - 12 Peças', 89.90, '1234567890132', 1),
        ('Cafeteira Elétrica - 12 Xícaras', 299.90, '1234567890133', 1),
        ('Conjunto de Panelas - Antiaderente', 349.90, '1234567890134', 1),
        ('TV LED 50\" - Full HD', 2499.00, '1234567890135', 1),
        ('Geladeira Inverse - 450 Litros', 3499.00, '1234567890136', 1),
        ('Assento de Carro - Conforto e Segurança', 199.90, '1234567890137', 1),
        ('Conjunto de Facas de Cozinha - 6 Peças', 129.90, '1234567890138', 1),
        ('Roupão de Banho - Microfibra', 89.90, '1234567890139', 1),
        ('Aspirador de Pó - Sem Fio', 599.90, '1234567890140', 1),
        ('Secador de Cabelo - 2200W', 199.90, '1234567890141', 1),
        ('Jogo de Lençóis - 150 Fios', 159.90, '1234567890142', 1);
 
        CREATE TABLE CATEGORIAS(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            NOME VARCHAR(80) NOT NULL
            );
 
            INSERT INTO CATEGORIAS (NOME) VALUES
            ('Roupas'),
            ('Eletrônicos'),
            ('Eletrodomésticos'),
            ('Utensílios de Cozinha'),
            ('Papeleria'),
            ('Acessórios'),
            ('Comidas');
 
            CREATE TABLE PRODUTO_CATEGORIA (
            PRODUTO_ID INT,
            CATEGORIA_ID INT,
            PRIMARY KEY (PRODUTO_ID, CATEGORIA_ID),
            FOREIGN KEY (PRODUTO_ID) REFERENCES PRODUTOS(ID),
            FOREIGN KEY (CATEGORIA_ID) REFERENCES CATEGORIAS(ID)
            );
 
            INSERT INTO PRODUTO_CATEGORIA (PRODUTO_ID, CATEGORIA_ID) VALUES
                (1, 7),
                (2, 7),
                (3, 1),
                (4, 5),
                (5, 2),
                (6, 5),
                (7, 1),
                (8, 3),
                (9, 2),
                (10, 3),
                (11, 3),
                (12, 3),
                (13, 3),
                (14, 3),
                (15, 2),
                (16, 3),
                (17, 1),
                (18, 3),
                (19, 1),
                (20, 3),
                (21, 3);"
        ;
 
 
$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if($conexao->connect_error) {
    die("falha na conexão: ".$conexao->connect_error);
}
 
?>